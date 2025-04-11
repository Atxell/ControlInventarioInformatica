<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model {
    protected $fillable = ['nombre', 'tipo_equipo_id'];
    
    public function tipo() {
        return $this->belongsTo(TipoEquipo::class, 'tipo_equipo_id');
    }
    
    public function modelos() {
        return $this->hasMany(Modelo::class);
    }
}