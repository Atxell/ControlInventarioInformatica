<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $query = Equipo::query()->with(['tipo', 'marca', 'estado']);
        
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('codigo_activo', 'like', "%$search%")
                ->orWhere('serial', 'like', "%$search%")
                ->orWhere('modelo', 'like', "%$search%")
                ->orWhereHas('marca', function($q) use ($search) {
                    $q->where('nombre', 'like', "%$search%");
                });
            });
        }
        
        $equipos = $query->paginate(10)->withQueryString();
        
        return view('inventario.index', compact('equipos'));
    }

    public function create()
    {
        $tipos = TipoEquipo::all();
        $marcas = Marca::all();
        $estados = EstadoEquipo::all();
        
        return view('inventario.create', compact('tipos', 'marcas', 'estados'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo_activo' => 'required|unique:equipos',
            'tipo_id' => 'required|exists:tipos_equipo,id',
            'marca_id' => 'required|exists:marcas,id',
            'modelo' => 'required',
            'serial' => 'required|unique:equipos',
            'estado_id' => 'required|exists:estados_equipo,id'
        ]);

        Equipo::create($validated + ['user_id' => auth()->id()]);

        return redirect()->route('inventario.index')
            ->with('success', 'Equipo registrado exitosamente');
    }

    public function show(Equipo $equipo)
    {
        return view('inventario.show', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        $tipos = TipoEquipo::all();
        $marcas = Marca::all();
        $estados = EstadoEquipo::all();
        
        return view('inventario.edit', compact('equipo', 'tipos', 'marcas', 'estados'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $validated = $request->validate([
            'tipo_id' => 'required|exists:tipos_equipo,id',
            'marca_id' => 'required|exists:marcas,id',
            'modelo' => 'required',
            'estado_id' => 'required|exists:estados_equipo,id'
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
}