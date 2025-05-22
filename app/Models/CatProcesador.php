<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatProcesador extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'procesadores';
    protected $fillable = [
        'marca',
        'tipo',
        'generacion'
    ];

    protected $dates = ['deleted_at'];
}
