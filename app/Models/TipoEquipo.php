<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model {
    protected $fillable = ['nombre'];
    
    public function marcas() {
        return $this->hasMany(Marca::class, 'tipo_equipo_id');
    }
}