<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComponenteComputadora extends Model
{

    protected $table = 'componente_computadora';

    protected $fillable = [
        'computadora_id',
        'procesador_id',
        'disco_duro_id',
        'memoria_id'
    ];

    // Relaciones
    public function computadora()
    {
        return $this->belongsTo(DatosComputadora::class, 'computadora_id');
    }

    public function procesador()
    {
        return $this->belongsTo(CatProcesador::class, 'procesador_id');
    }

    public function discoDuro()
    {
        return $this->belongsTo(CatDiscosDuros::class, 'disco_duro_id');
    }

    public function memoria()
    {
        return $this->belongsTo(CatMemorias::class, 'memoria_id');
    }
}
