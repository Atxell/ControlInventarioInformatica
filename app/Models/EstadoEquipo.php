<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoEquipo extends Model
{
    protected $table = 'estados_equipo';
    
    protected $fillable = ['nombre', 'color'];
    
    // Relación con equipos
    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}