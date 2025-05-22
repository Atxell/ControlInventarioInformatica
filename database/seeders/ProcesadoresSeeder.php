<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CatProcesador;

class ProcesadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $procesadores = [
            ['marca' => 'Intel', 'tipo' => 'Core i3', 'generacion' => '10th'],
            ['marca' => 'Intel', 'tipo' => 'Core i5', 'generacion' => '10th'],
            ['marca' => 'Intel', 'tipo' => 'Core i7', 'generacion' => '10th'],
            ['marca' => 'Intel', 'tipo' => 'Core i9', 'generacion' => '10th'],
            ['marca' => 'AMD', 'tipo' => 'Ryzen 3', 'generacion' => '5000'],
            ['marca' => 'AMD', 'tipo' => 'Ryzen 5', 'generacion' => '5000'],
            ['marca' => 'AMD', 'tipo' => 'Ryzen 7', 'generacion' => '5000'],
        ];

        foreach ($procesadores as $procesador) {
            CatProcesador::create($procesador);
        }
    }
}
