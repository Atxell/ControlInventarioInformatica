<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoEquipo extends Model
{
    protected $table = 'estados_equipo';
    protected $fillable = ['nombre', 'color'];
    
    public function computadoras()
    {
        return $this->hasMany(DatosComputadora::class, 'estado_id');
    }
}