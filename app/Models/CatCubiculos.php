<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatCubiculos extends Model
{
    protected $table = 'catcubiculos';
    //
    protected $fillable = ['ZonaID', 'NombreCubiculo'];

    public function zona()
    {
        return $this->belongsTo(CatZonas::class, 'ZonaID');
    }
}
