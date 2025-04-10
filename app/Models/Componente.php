<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    public function equipo() {
        return $this->belongsTo(Equipo::class, 'equipos_id');
    }
}
