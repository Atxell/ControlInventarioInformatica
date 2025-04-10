<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function marca() {
        return $this->belongsTo(CatMarca::class, 'marca_id');
    }
    
    public function componentes() {
        return $this->hasMany(Componente::class, 'equipos_id');
    }
    
    public function solicitudes() {
        return $this->hasMany(Solicitud::class, 'equipos_id');
    }
}
