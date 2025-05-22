<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diputado;
use Illuminate\Support\Facades\DB;

class DiputadosPrueba extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       DB::table('Diputados')->insert([
            ['nombre' => 'Facundo Fernandez De La Cruz'],
            ['nombre' => 'Ramon Ortiz Avila'],
            ['nombre' => 'Jose Antonio Hernandez'],
            ['nombre' => 'Maria Socorro Felix '],
        ]);
    }
}
