<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AsignacionComputadora;

class AsignacionesComputadorasSeeder extends Seeder
{
    public function run()
    {
        // Asignación a diputado
       AsignacionComputadora::create([
            'computadora_id' => 1,
            'diputado_id' => 1,
            'cubiculo_id' => 1,
            'fecha_asignacion' => now()->subMonths(6),
            'notas' => 'Asignación inicial'
        ]);
        
        // Computadora en sistemas (sin diputado)
        AsignacionComputadora::create([
            'computadora_id' => 2,
            'cubiculo_id' => 1, // ID del área de sistemas
            'fecha_asignacion' => now()->subMonth(),
            'notas' => 'En mantenimiento'
        ]);
        
        // Computadora retirada
        AsignacionComputadora::create([
            'computadora_id' => 3,
            'diputado_id' => 2,
            'cubiculo_id' => 2,
            'fecha_asignacion' => now()->subYear(),
            'notas' => 'Equipo dado de baja'
        ]);
    }
}
