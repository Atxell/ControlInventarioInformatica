<?php

namespace App\Http\Controllers;

abstract class OperadorController
{
    public function getMarcas($tipoId) {
        return Marca::where('tipo_equipo_id', $tipoId)->get();
    }
    
    public function storeTipo(Request $request) {
        $request->validate(['nombre' => 'required|unique:tipos_equipo']);
        return TipoEquipo::create($request->all());
    }
}
