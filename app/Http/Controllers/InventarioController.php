<?php

namespace App\Http\Controllers;

use App\Models\DatosComputadora;
use App\Models\TipoEquipo;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\CatVersionesDeOffice;
use App\Models\CatSistemaOperativo;
use App\Models\AsignacionComputadora;
use App\Models\Diputado;
use App\Models\CatCubiculos;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $query = DatosComputadora::query()
            ->with([
                'tipoEquipo',
                'marca',
                'modelo',
                'versionOffice',
                'sistemaOperativo',
                'asignacionActual.diputado',
                'asignacionActual.cubiculo'
            ]);

        // Búsqueda general
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nombre', 'like', "%$search%")
                  ->orWhere('mac', 'like', "%$search%")
                  ->orWhere('ip', 'like', "%$search%")
                  ->orWhereHas('tipoEquipo', function($q) use ($search) {
                      $q->where('nombre', 'like', "%$search%");
                  })
                  ->orWhereHas('marca', function($q) use ($search) {
                      $q->where('nombre', 'like', "%$search%");
                  })
                  ->orWhereHas('modelo', function($q) use ($search) {
                      $q->where('nombre', 'like', "%$search%");
                  })
                  ->orWhereHas('asignacionActual.diputado', function($q) use ($search) {
                      $q->where('nombre_completo', 'like', "%$search%");
                  })
                  ->orWhereHas('asignacionActual.cubiculo', function($q) use ($search) {
                      $q->where('nombre', 'like', "%$search%")
                        ->orWhere('codigo', 'like', "%$search%");
                  });
            });
        }

        // Filtros avanzados
        if ($request->has('tipo_equipo_id')) {
            $query->where('tipo_equipo_id', $request->tipo_equipo_id);
        }

        if ($request->has('marca_id')) {
            $query->where('marca_id', $request->marca_id);
        }

        if ($request->has('estado')) {
            $query->where('estado', $request->estado);
        }

        if ($request->has('con_diputado')) {
            $query->whereHas('asignacionActual', function($q) {
                $q->whereNotNull('diputado_id');
            });
        }

        $computadoras = $query->paginate(10)->withQueryString();
        
        $tipos = TipoEquipo::all();
        $marcas = Marca::all();
        $estados = ['activo', 'mantenimiento', 'baja'];

        return view('inventario.index', compact('computadoras', 'tipos', 'marcas', 'estados'));
    }

    public function create()
    {
        $tipos = TipoEquipo::all();
        $marcas = Marca::all();
        $modelos = Modelo::all();
        $versiones = CatVersionesDeOffice::all();
        $sistemas = CatSistemaOperativo::all();
        $diputados = Diputado::where('activo', true)->get();
        $cubiculos = CatCubiculos::all();

        return view('inventario.create', compact(
            'tipos', 'marcas', 'modelos', 'versiones', 
            'sistemas', 'diputados', 'cubiculos'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|unique:datoscomputadora|max:50',
            'tipo_equipo_id' => 'required|exists:cattipodeequipo,id',
            'marca_id' => 'required|exists:catmarcas,id',
            'modelo_id' => 'required|exists:catmodelos,id',
            'version_office_id' => 'required|exists:catversionesdeoffice,id',
            'sistema_operativo_id' => 'required|exists:catsistemasoperativos,id',
            'licenciaoriginal' => 'boolean',
            'mac' => 'nullable|unique:datoscomputadora|max:17',
            'ip' => 'nullable|unique:datoscomputadora|max:15',
            'estado' => 'required|in:activo,mantenimiento,baja',
            'diputado_id' => 'nullable|exists:diputados,id',
            'cubiculo_id' => 'nullable|exists:cat_cubiculos,id'
        ]);

        // Crear computadora
        $computadora = DatosComputadora::create($validated);

        // Crear asignación inicial si hay diputado o ubicación
        if ($request->diputado_id || $request->cubiculo_id) {
            AsignacionComputadora::create([
                'computadora_id' => $computadora->id,
                'diputado_id' => $request->diputado_id,
                'cubiculo_id' => $request->cubiculo_id,
                'fecha_asignacion' => now()
            ]);
        }

        return redirect()->route('inventario.index')
            ->with('success', 'Computadora registrada exitosamente');
    }

    public function show(DatosComputadora $computadora)
    {
        $computadora->load([
            'tipoEquipo',
            'marca',
            'modelo',
            'versionOffice',
            'sistemaOperativo',
            'asignaciones.diputado',
            'asignaciones.cubiculo'
        ]);

        return view('inventario.show', compact('computadora'));
    }

    public function edit(DatosComputadora $computadora)
    {
        $tipos = TipoEquipo::all();
        $marcas = Marca::all();
        $modelos = Modelo::where('marca_id', $computadora->marca_id)->get();
        $versiones = CatVersionesDeDeOffice::all();
        $sistemas = CatSistemaOperativo::all();
        $diputados = Diputado::where('activo', true)->get();
        $cubiculos = CatCubiculos::all();

        return view('inventario.edit', compact(
            'computadora', 'tipos', 'marcas', 'modelos', 
            'versiones', 'sistemas', 'diputados', 'cubiculos'
        ));
    }

    public function update(Request $request, DatosComputadora $computadora)
    {
        $validated = $request->validate([
            'nombre' => 'required|unique:datoscomputadora,nombre,'.$computadora->id,
            'tipo_equipo_id' => 'required|exists:cattipodeequipo,id',
            'marca_id' => 'required|exists:catmarcas,id',
            'modelo_id' => 'required|exists:catmodelos,id',
            'version_office_id' => 'required|exists:catversionesdeoffice,id',
            'sistema_operativo_id' => 'required|exists:catsistemasoperativos,id',
            'licenciaoriginal' => 'boolean',
            'mac' => 'nullable|unique:datoscomputadora,mac,'.$computadora->id,
            'ip' => 'nullable|unique:datoscomputadora,ip,'.$computadora->id,
            'estado' => 'required|in:activo,mantenimiento,baja'
        ]);

        $computadora->update($validated);

        return redirect()->route('inventario.index')
            ->with('success', 'Computadora actualizada exitosamente');
    }

    public function destroy(DatosComputadora $computadora)
    {
        $computadora->delete();
        
        return redirect()->route('inventario.index')
            ->with('success', 'Computadora eliminada correctamente');
    }

    // Métodos para AJAX
    public function getModelos(Request $request)
    {
        return Modelo::where('marca_id', $request->marca_id)->get();
    }

    public function getAsignacionActual(Request $request)
    {
        $computadora = DatosComputadora::find($request->computadora_id);
        return response()->json([
            'asignacion' => $computadora->asignacionActual,
            'diputados' => Diputado::where('activo', true)->get(),
            'cubiculos' => CatCubiculos::all()
        ]);
    }

    public function updateAsignacion(Request $request, DatosComputadora $computadora)
    {
        $request->validate([
            'diputado_id' => 'nullable|exists:diputados,id',
            'cubiculo_id' => 'nullable|exists:cat_cubiculos,id',
            'notas' => 'nullable|string'
        ]);

        // Finalizar asignación actual si existe
        if ($computadora->asignacionActual) {
            $computadora->asignacionActual->update([
                'fecha_retiro' => now(),
                'notas' => $request->notas_retiro ?? 'Cambio de asignación'
            ]);
        }

        // Crear nueva asignación si hay datos
        if ($request->diputado_id || $request->cubiculo_id) {
            AsignacionComputadora::create([
                'computadora_id' => $computadora->id,
                'diputado_id' => $request->diputado_id,
                'cubiculo_id' => $request->cubiculo_id,
                'fecha_asignacion' => now(),
                'notas' => $request->notas
            ]);
        }

        return redirect()->back()
            ->with('success', 'Asignación actualizada correctamente');
    }
}