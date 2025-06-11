<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEdificios extends Model
{
    protected $table = 'catedificios';
    //
    public function zonas()
    {
        return $this->hasMany(CatZonas::class, 'EdificioID'); // Especifica la FK
    }
}
