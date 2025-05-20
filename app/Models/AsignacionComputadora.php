<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsignacionComputadora extends Model
{
    protected $table = 'asignaciones_computadoras';
    
    protected $fillable = [
        'computadora_id',
        'diputado_id',
        'cubiculo_id',
        'fecha_asignacion',
        'fecha_retiro',
        'notas'
    ];
    
    protected $dates = [
        'fecha_asignacion',
        'fecha_retiro'
    ];
    
    // Relaciones
    public function computadora()
    {
        return $this->belongsTo(DatosComputadora::class);
    }
    
    public function diputado()
    {
        return $this->belongsTo(Diputado::class)->withDefault([
            'nombre' => 'No asignado'
        ]);
    }
    
    public function ubicacion()
    {
        return $this->belongsTo(CatCubiculos::class)->withDefault([
            'nombre' => 'En tránsito'
        ]);
    }
    
    // Scopes útiles
    public function scopeActivas($query)
    {
        return $query->whereNull('fecha_retiro');
    }
    
    public function scopePorDiputado($query, $diputadoId)
    {
        return $query->where('diputado_id', $diputadoId);
    }
    
    public function scopePorUbicacion($query, $ubicacionId)
    {
        return $query->where('ubicacion_id', $ubicacionId);
    }
}