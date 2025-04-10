<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatMarca extends Model
{
    public function equipos() {
        return $this->hasMany(Equipo::class, 'marca_id');
    }
    
    public function modelos() {
        return $this->hasMany(CatModelo::class, 'marcadeequipo_id');
    }
}
