<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatZonas extends Model
{
    protected $table = 'catzonas';

    protected $fillable = ['EdificioID', 'Planta'];
    //
    public function edificio()
    {
        return $this->belongsTo(CatEdificios::class, 'EdificioID');
    }

    public function cubiculos()
    {
        return $this->hasMany(CatCubiculos::class, 'ZonaID');
    }
}
