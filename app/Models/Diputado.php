<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diputado extends Model
{
    protected $table = 'Diputados';


    public function asignacionesComputadoras()
    {
        return $this->hasMany(AsignacionComputadora::class)
                ->with('computadora');
    }
}
