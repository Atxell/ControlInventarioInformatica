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

    public function cubiculo()
    {
        return $this->belongsTo(CatCubiculos::class, 'cubiculo_id')
               ->withDefault([
                   'nombre' => 'Sin ubicación',
                   'codigo' => 'N/A'
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
    
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (is_null($model->fecha_retiro)) {
                $exists = static::where('computadora_id', $model->computadora_id)
                    ->whereNull('fecha_retiro')
                    ->exists();
                    
                if ($exists && !$model->isDirty('fecha_retiro')) {
                    throw new \Exception('Esta computadora ya tiene una asignación activa');
                }
            }
        });
    }
}