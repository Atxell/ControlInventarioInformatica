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
        'codigo_cubiculo',
        'observaciones'
    ];
    

    // Relaciones
    public function estado()
    {
        return $this->belongsTo(EstadoEquipo::class, 'estado_id')
            ->withDefault(['estado' => 'No especificado']);
    }
    
    public function tipoEquipo()
    {
        return $this->belongsTo(TipoEquipo::class, 'tipo_equipo_id')
            ->withDefault(['nombre' => 'Sin tipo']);
    }
    public function cubiculo()
    {
        return $this->belongsTo(CatCubiculos::class, 'cubiculo_id');
    }
    public function zona()
    {
        return $this->belongsTo(CatZonas::class, 'zona_id');
    }

    public function edificio()
    {
        return $this->belongsTo(CatEdificios::class, 'edificio_id');
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
                    ->orWhere('Asignacion', 'like', "%$search%");
    }
}