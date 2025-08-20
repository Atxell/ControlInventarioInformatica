<?php

namespace App\Http\Controllers;

use App\Models\CatOtrosEquipos;
use App\Models\TipoEquipo;
use App\Models\EstadoEquipo;
use App\Models\Diputado;
use App\Models\CatEdificios;
use App\Models\CatZonas;
use App\Models\CatCubiculos;
use Illuminate\Http\Request;

class OtrosEquiposController extends Controller
{
    public function index(Request $request)
    {
        $query = CatOtrosEquipos::query()
            ->with(['tipoEquipo', 'estado']);

        // Búsqueda general
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('Nombre', 'like', "%$search%")
                  ->orWhere('Num_inv', 'like', "%$search%");
            });
        }

        $equipos = $query->paginate(10)->withQueryString();
        
        $tipos = TipoEquipo::all();
        $estados = EstadoEquipo::all();

        return view('otros-equipos.index', compact('equipos', 'tipos', 'estados'));
    }

    public function create()
    {
        $tipos = TipoEquipo::all();
        $estados = EstadoEquipo::all();
        $diputados = Diputado::all();
        $edificios = CatEdificios::all();

        return view('otros-equipos.create', compact(
            'tipos', 'estados', 'diputados', 'edificios'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Num_inv' => 'required|string|unique:cat_otros_equipos,Num_inv|max:20',
            'Nombre' => 'required|max:100',
            'ip' => 'nullable|unique:cat_otros_equipos|max:15',
            'Asignacion' => 'nullable|max:100',
            'estado_id' => 'required|exists:estados_equipo,id',
            'tipo_equipo_id' => 'required|exists:cattipodeequipo,id',
            'edificio_id' => 'nullable|exists:catedificios,id',
            'zona_id' => 'nullable|exists:catzonas,id',
            'cubiculo_id' => 'nullable|exists:catcubiculos,id',
            'observaciones' => 'nullable|string'
        ]);

        try {
            $equipo = CatOtrosEquipos::create($validated);

            return redirect()->route('otros-equipos.index')
                ->with('success', 'Equipo registrado exitosamente');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors([
                'error' => 'Error al registrar el equipo: ' . $e->getMessage()
            ]);
        }
    }

    public function show($id)
    {
        $equipo = CatOtrosEquipos::findOrFail($id);
        return view('otros-equipos.show', compact('equipo'));
    }

    public function edit($id)
    {
        $equipo = CatOtrosEquipos::findOrFail($id);

        
        // Obtener ubicación actual si existe
        $edificio_id = $equipo->edificio_id;
        $zona_id = $equipo->zona_id;
        $cubiculo_id = $equipo->cubiculo_id;

        // Obtener zonas y cubículos basados en la ubicación actual
        $zonas = $edificio_id ? CatZonas::where('EdificioID', $edificio_id)->get() : collect();
        $cubiculos = $zona_id ? CatCubiculos::where('ZonaID', $zona_id)->get() : collect();

        return view('otros-equipos.edit', [
            'equipo' => $equipo,
            'tipos' => TipoEquipo::all(),
            'estados' => EstadoEquipo::all(),
            'diputados' => Diputado::all(),
            'edificios' => CatEdificios::all(),
            'zonas' => $zonas,
            'cubiculos' => $cubiculos,
            'edificio_id' => $edificio_id,
            'zona_id' => $zona_id,
            'cubiculo_id' => $cubiculo_id
        ]);
    }

    public function update(Request $request, $id)
    {  
        $equipo = CatOtrosEquipos::findOrFail($id);
        $validated = $request->validate([
            'Num_inv' => 'required|string|max:20|unique:cat_otros_equipos,Num_inv,'.$equipo->id,
            'Nombre' => 'required|max:100',
            'ip' => 'nullable|max:15|unique:cat_otros_equipos,ip,'.$equipo->id,
            'Asignacion' => 'nullable|max:100',
            'estado_id' => 'required|exists:estados_equipo,id',
            'tipo_equipo_id' => 'required|exists:cattipodeequipo,id',
            'edificio_id' => 'nullable|exists:catedificios,id',
            'zona_id' => 'nullable|exists:catzonas,id',
            'cubiculo_id' => 'nullable|exists:catcubiculos,id',
            'observaciones' => 'nullable|string'
        ]);

        try {
            $equipo->update($validated);

            return redirect()->route('otros-equipos.index')
                ->with('success', 'Equipo actualizado exitosamente');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors([
                'error' => 'Error al actualizar el equipo: ' . $e->getMessage()
            ]);
        }
    }

    public function destroy(CatOtrosEquipos $equipo)
    {
        try {
            $equipo->delete();
            
            return redirect()->route('otros-equipos.index')
                ->with('success', 'Equipo eliminado correctamente');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'No se pudo eliminar el equipo: ' . $e->getMessage());
        }
    }
}