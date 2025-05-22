<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatMemorias extends Model
{
    use HasFactory, SoftDeletes;

        protected $table = 'catmemorias';
        protected $fillable = [
            'Capacidad',
            'Frecuencia',
            'Generación'
        ];

        protected $dates = ['deleted_at'];
}
