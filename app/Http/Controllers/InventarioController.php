<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\TipoEquipo;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\EstadoEquipo;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $query = Equipo::query()->with(['tipo', 'marca', 'modelo', 'estado', 'user']);
        
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('codigo_activo', 'like', "%$search%")
                  ->orWhere('serial', 'like', "%$search%")
                  ->orWhereHas('modelo', function($q) use ($search) {
                      $q->where('nombre', 'like', "%$search%");
                  })
                  ->orWhereHas('marca', function($q) use ($search) {
                      $q->where('nombre', 'like', "%$search%");
                  })
                  ->orWhereHas('user', function($q) use ($search) {
                      $q->where('name', 'like', "%$search%");
                  });
            });
        }
        
        // Filtros adicionales
        if ($request->has('tipo_id')) {
            $query->where('tipo_id', $request->tipo_id);
        }
        
        if ($request->has('estado_id')) {
            $query->where('estado_id', $request->estado_id);
        }
        
        $equipos = $query->paginate(10)->withQueryString();
        $tipos = TipoEquipo::all();
        $estados = EstadoEquipo::all();
        
        return view('inventario.index', compact('equipos', 'tipos', 'estados'));
    }

    public function create()
    {
        $tipos = TipoEquipo::all();
        $estados = EstadoEquipo::all();
        
        return view('inventario.create', compact('tipos', 'estados'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo_activo' => 'required|unique:equipos|max:50',
            'tipo_id' => 'required|exists:tipos_equipo,id',
            'marca_id' => 'required|exists:marcas,id',
            'modelo_id' => 'required|exists:modelos,id',
            'serial' => 'required|unique:equipos|max:100',
            'estado_id' => 'required|exists:estados_equipo,id',
            'fecha_compra' => 'nullable|date',
            'garantia' => 'nullable|integer|min:0'
        ]);

        Equipo::create($validated + [
            'user_id' => auth()->id(),
            'codigo_activo' => $this->generarCodigoActivo($request->tipo_id)
        ]);

        return redirect()->route('inventario.index')
            ->with('success', 'Equipo registrado exitosamente');
    }

    public function show(Equipo $equipo)
    {
        $equipo->load(['tipo', 'marca', 'modelo', 'estado', 'user']);
        return view('inventario.show', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        $tipos = TipoEquipo::all();
        $marcas = Marca::where('tipo_equipo_id', $equipo->tipo_id)->get();
        $modelos = Modelo::where('marca_id', $equipo->marca_id)->get();
        $estados = EstadoEquipo::all();
        
        return view('inventario.edit', compact('equipo', 'tipos', 'marcas', 'modelos', 'estados'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $validated = $request->validate([
            'tipo_id' => 'required|exists:tipos_equipo,id',
            'marca_id' => 'required|exists:marcas,id',
            'modelo_id' => 'required|exists:modelos,id',
            'estado_id' => 'required|exists:estados_equipo,id',
            'fecha_compra' => 'nullable|date',
            'garantia' => 'nullable|integer|min:0',
            'serial' => 'required|unique:equipos,serial,'.$equipo->id
        ]);

        $equipo->update($validated);

        return redirect()->route('inventario.index')
            ->with('success', 'Equipo actualizado exitosamente');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        
        return redirect()->route('inventario.index')
            ->with('success', 'Equipo eliminado correctamente');
    }

    // Métodos para AJAX
    public function getMarcas(Request $request)
    {
        return Marca::where('tipo_equipo_id', $request->tipo_id)->get();
    }

    public function getModelos(Request $request)
    {
        return Modelo::where('marca_id', $request->marca_id)->get();
    }

    // Generar código de activo automático
    protected function generarCodigoActivo($tipo_id)
    {
        $tipo = TipoEquipo::find($tipo_id);
        $count = Equipo::where('tipo_id', $tipo_id)->count() + 1;
        
        return strtoupper(substr($tipo->nombre, 0, 3)) . '-' . str_pad($count, 4, '0', STR_PAD_LEFT);
    }
}