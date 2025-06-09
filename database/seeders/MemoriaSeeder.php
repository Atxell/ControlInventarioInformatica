<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CatMemorias;

class MemoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $memorias = [
            ['Capacidad' => '2GB',   'Frecuencia' => '1333MHz', 'Generación' => 'DDR3'],
            ['Capacidad' => '4GB',   'Frecuencia' => '1600MHz', 'Generación' => 'DDR3'],
            ['Capacidad' => '8GB',   'Frecuencia' => '1600MHz', 'Generación' => 'DDR3'],
            ['Capacidad' => '8GB',   'Frecuencia' => '1866MHz', 'Generación' => 'DDR3'],
            ['Capacidad' => '16GB',  'Frecuencia' => '1600MHz', 'Generación' => 'DDR3'], 

            ['Capacidad' => '4GB',   'Frecuencia' => '2133MHz', 'Generación' => 'DDR4'],
            ['Capacidad' => '4GB',   'Frecuencia' => '2400MHz', 'Generación' => 'DDR4'],
            ['Capacidad' => '8GB',   'Frecuencia' => '2400MHz', 'Generación' => 'DDR4'],
            ['Capacidad' => '8GB',   'Frecuencia' => '2666MHz', 'Generación' => 'DDR4'],
            ['Capacidad' => '8GB',   'Frecuencia' => '3200MHz', 'Generación' => 'DDR4'], 
            ['Capacidad' => '16GB',  'Frecuencia' => '2400MHz', 'Generación' => 'DDR4'],
            ['Capacidad' => '16GB',  'Frecuencia' => '3200MHz', 'Generación' => 'DDR4'], 
            ['Capacidad' => '32GB',  'Frecuencia' => '3200MHz', 'Generación' => 'DDR4'],

            ['Capacidad' => '16GB',  'Frecuencia' => '4800MHz', 'Generación' => 'DDR5'],
            ['Capacidad' => '16GB',  'Frecuencia' => '5200MHz', 'Generación' => 'DDR5'],
        ];

        foreach ($memorias as $memoria) {
            CatMemorias::create($memoria);
        }
    }
}
