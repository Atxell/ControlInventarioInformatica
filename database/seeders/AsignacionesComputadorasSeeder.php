<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AsignacionComputadora;

class AsignacionesComputadorasSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 375; $i++) {
            AsignacionComputadora::create([
                'computadora_id' => $i,
                'diputado_id' => null,
                'cubiculo_id' => 1,
                'fecha_asignacion' => now()->subMonths(6),
                'notas' => 'Asignación inicial'
            ]);
        }
    }
}