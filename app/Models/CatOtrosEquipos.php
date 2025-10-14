<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatOtrosEquipos extends Model
{
    protected $table = 'cat_otros_equipos';
    
    protected $fillable = [
        'Num_inv',
        'ip',
        'Nombre',
        'Asignacion',
        'estado_id',
        'tipo_equipo_id',
        'edificio_id',      // Nuevo
        'zona_id',          // Nuevo
        'cubiculo_id',      // Nuevo
        'observaciones'
    ];

    // Relaciones
    public function estado()
    {
        return $this->belongsTo(EstadoEquipo::class, 'estado_id')
            ->withDefault(['nombre' => 'No especificado']);
    }
    
    public function tipoEquipo()
    {
        return $this->belongsTo(TipoEquipo::class, 'tipo_equipo_id')
            ->withDefault(['name' => 'Sin tipo']);
    }

    public function cubiculo()
    {
        return $this->belongsTo(CatCubiculos::class, 'cubiculo_id')
            ->withDefault(['NombreCubiculo' => 'Sin cubículo', 'codigo' => 'N/A']);
    }

    public function zona()
    {
        return $this->belongsTo(CatZonas::class, 'zona_id')
            ->withDefault(['Planta' => 'N/A']);
    }

    public function edificio()
    {
        return $this->belongsTo(CatEdificios::class, 'edificio_id')
            ->withDefault(['NombreEdificio' => 'N/A']);
    }
    
    // Scopes útiles
    public function scopePorTipo($query, $tipoId)
    {
        return $query->where('tipo_equipo_id', $tipoId);
    }
    
    public function scopePorEstado($query, $estadoId)
    {
        return $query->where('estado_id', $estadoId);
    }
    
    public function scopeBuscar($query, $search)
    {
        return $query->where('Num_inv', 'like', "%$search%")
                    ->orWhere('Nombre', 'like', "%$search%")
                    ->orWhere('Asignacion', 'like', "%$search%")
                    ->orWhere('ip', 'like', "%$search%")
                    ->orWhere('observaciones', 'like', "%$search%");
    }
}