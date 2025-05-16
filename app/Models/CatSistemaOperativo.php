<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatSistemaOperativo extends Model
{
    protected $table = 'catsistemasoperativos';
    protected $fillable = ['nombre'];
    
    public function computadoras()
    {
        return $this->hasMany(DatosComputadora::class, 'sistema_operativo_id');
    }
}
