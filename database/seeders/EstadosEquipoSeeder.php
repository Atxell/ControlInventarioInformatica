<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstadoEquipo;
use Illuminate\Support\Facades\DB;

class EstadosEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('estados_equipo')->insert([
            ['nombre' => 'Disponible', 'color' => '#28a745'],
            ['nombre' => 'Asignado', 'color' => '#007bff'],
            ['nombre' => 'En mantenimiento', 'color' => '#ffc107'],
            ['nombre' => 'Dañado', 'color' => '#dc3545'],
        ]);
    }
}
