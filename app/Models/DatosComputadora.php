<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosComputadora extends Model
{
    protected $table = 'datoscomputadora';
    
    protected $fillable = [
        'Num_inv',
        'nombre',
        'tipo_equipo_id',
        'marca_id',
        'modelo_id',
        'version_office_id',
        'sistema_operativo_id',
        'licenciaoriginal',
        'mac',
        'ip',
        'estado_id',
        'grupo_trabajo'
    ];
    

    protected $casts = [
        'licenciaoriginal' => 'boolean',
    ];

    public function tipoEquipo()
    {
        return $this->belongsTo(TipoEquipo::class, 'tipo_equipo_id')
            ->withDefault(['nombre' => 'Sin tipo']);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id')
            ->withDefault(['nombre' => 'Sin marca']);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id')
            ->withDefault(['nombre' => 'Sin modelo']);
    }

    public function versionOffice()
    {
        return $this->belongsTo(CatVersionesDeOffice::class, 'version_office_id')
            ->withDefault(['nombre' => 'No especificado']);
    }

    public function estadoEquipo()
    {
        return $this->belongsTo(\App\Models\EstadoEquipo::class, 'estado_id')
            ->withDefault(['estado' => 'No especificado']);
    }

    public function sistemaOperativo()
    {
        return $this->belongsTo(\App\Models\CatSistemaOperativo::class, 'sistema_operativo_id');
    }
   
    public function asignaciones()
    {
        return $this->hasMany(AsignacionComputadora::class, 'computadora_id');
    }

    public function asignacionActual()
    {
        return $this->hasOne(AsignacionComputadora::class, 'computadora_id')
                    ->latestOfMany();
    }
    
    public function componentes()
    {
        return $this->hasOne(ComponenteComputadora::class, 'computadora_id');
    }
}