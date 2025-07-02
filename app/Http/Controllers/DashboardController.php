<?php
namespace App\Http\Controllers;

use App\Models\DatosComputadora;
use App\Models\EstadoEquipo;
use App\Models\CatEdificios;
use App\Models\TipoEquipo;
use App\Models\Marca;
use App\Models\AsignacionComputadora;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // app/Http/Controllers/DashboardController.php
    public function index()
    {
        $totalComputers = DatosComputadora::count();
        
        $statuses = EstadoEquipo::withCount('computadoras')->get();
        
        // Modificado: Usar leftJoin para incluir todos los edificios
        $buildings = CatEdificios::select('catedificios.id', 'catedificios.NombreEdificio')
            ->selectRaw('COUNT(datoscomputadora.id) as count')
            ->leftJoin('catzonas', 'catzonas.EdificioID', '=', 'catedificios.id')
            ->leftJoin('catcubiculos', 'catcubiculos.ZonaID', '=', 'catzonas.id')
            ->leftJoin('asignaciones_computadoras', function($join) {
                $join->on('asignaciones_computadoras.cubiculo_id', '=', 'catcubiculos.id')
                    ->whereNull('asignaciones_computadoras.fecha_retiro');
            })
            ->leftJoin('datoscomputadora', 'datoscomputadora.id', '=', 'asignaciones_computadoras.computadora_id')
            ->groupBy('catedificios.id', 'catedificios.NombreEdificio')
            ->get();

        // Modificado: Usar Eloquent para tipos de equipos
        $equipmentTypes = TipoEquipo::withCount('computadoras')
            ->orderByDesc('computadoras_count')
            ->limit(3)
            ->get();

        $assignedComputers = AsignacionComputadora::whereNull('fecha_retiro')->count();
        $availableComputers = $totalComputers - $assignedComputers;

        return view('dashboard', compact(
            'totalComputers',
            'statuses',
            'buildings',
            'equipmentTypes',
            'assignedComputers',
            'availableComputers'
        ));
    }
    private function getStatusColor($status)
    {
        $colors = [
            'activo' => 'success',
            'mantenimiento' => 'warning',
            'baja' => 'danger',
            'dañado' => 'danger',
            'retirado' => 'secondary'
        ];
        
        return $colors[strtolower($status)] ?? 'primary';
    }
}