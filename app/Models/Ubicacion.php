<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    public function getUbicacionCompletaAttribute()
    {
        $edificio = Edificio::find(1)->nombre;
        $zona = Zona::find(1)->nombre;
        $cubiculo = Cubiculo::find(1)->codigo;
        $area = Area::find(1)->nombre;
        return "{$edificio} - {$zona} - {$cubiculo} - {$area}";
    }

    public function getUbicacionFromIds()
    {
        return sprintf(
            "%s-%s-%s-%s",
            Edificio::find($this->edificio_id)->nombre,
            Zona::find($this->zona_id)->nombre,
            Cubiculo::find($this->cubiculo_id)->codigo,
            Area::find($this->area_id)->nombre
        );
    }
}