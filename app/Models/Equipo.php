<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'codigo_activo',
        'tipo_id',
        'marca_id',
        'modelo',
        'serial',
        'estado_id',
        'user_id'
    ];

    public function tipo()
    {
        return $this->belongsTo(TipoEquipo::class);
    }

     public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function estado()
    {
        return $this->belongsTo(EstadoEquipo::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
