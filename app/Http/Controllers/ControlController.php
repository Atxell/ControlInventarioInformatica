<?php

namespace App\Http\Controllers;

abstract class ControlController
{
    public function create() {
        return view('operador', [
            'tipos' => TipoEquipo::all()
        ]);
    }
}
