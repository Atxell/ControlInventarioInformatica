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
            ['marca' => 'Intel', 'tipo' => 'Celeron', 'generacion' => '2nd'],
            ['marca' => 'Intel', 'tipo' => 'Pentium', 'generacion' => '2nd'],
            ['marca' => 'Intel', 'tipo' => 'Core i3', 'generacion' => '2nd'],
            ['marca' => 'Intel', 'tipo' => 'Core i5', 'generacion' => '2nd'],
            ['marca' => 'Intel', 'tipo' => 'Core i7', 'generacion' => '2nd'],

            ['marca' => 'Intel', 'tipo' => 'Celeron', 'generacion' => '3rd'],
            ['marca' => 'Intel', 'tipo' => 'Pentium', 'generacion' => '3rd'],
            ['marca' => 'Intel', 'tipo' => 'Core i3', 'generacion' => '3rd'],
            ['marca' => 'Intel', 'tipo' => 'Core i5', 'generacion' => '3rd'],
            ['marca' => 'Intel', 'tipo' => 'Core i7', 'generacion' => '3rd'],

            ['marca' => 'Intel', 'tipo' => 'Core i3', 'generacion' => '4th'],
            ['marca' => 'Intel', 'tipo' => 'Core i5', 'generacion' => '4th'],
            ['marca' => 'Intel', 'tipo' => 'Core i7', 'generacion' => '4th'],
            
            ['marca' => 'Intel', 'tipo' => 'Core i3', 'generacion' => '6th'],
            ['marca' => 'Intel', 'tipo' => 'Core i5', 'generacion' => '6th'],
            ['marca' => 'Intel', 'tipo' => 'Core i7', 'generacion' => '6th'],
            
            ['marca' => 'Intel', 'tipo' => 'Core i3', 'generacion' => '7th'],
            ['marca' => 'Intel', 'tipo' => 'Core i5', 'generacion' => '7th'],
            ['marca' => 'Intel', 'tipo' => 'Core i7', 'generacion' => '7th'],
            
            ['marca' => 'Intel', 'tipo' => 'Core i3', 'generacion' => '8th'],
            ['marca' => 'Intel', 'tipo' => 'Core i5', 'generacion' => '8th'],
            ['marca' => 'Intel', 'tipo' => 'Core i7', 'generacion' => '8th'],
            
            ['marca' => 'Intel', 'tipo' => 'Core i3', 'generacion' => '10th'],
            ['marca' => 'Intel', 'tipo' => 'Core i5', 'generacion' => '10th'],
            ['marca' => 'Intel', 'tipo' => 'Core i7', 'generacion' => '10th'],
            ['marca' => 'Intel', 'tipo' => 'Core i9', 'generacion' => '10th'],

            ['marca' => 'AMD', 'tipo' => 'Ryzen 3', 'generacion' => '3000'],
            ['marca' => 'AMD', 'tipo' => 'Ryzen 5', 'generacion' => '3000'],
            ['marca' => 'AMD', 'tipo' => 'Ryzen 7', 'generacion' => '3000'],
            ['marca' => 'AMD', 'tipo' => 'Ryzen 3', 'generacion' => '5000'],
            ['marca' => 'AMD', 'tipo' => 'Ryzen 5', 'generacion' => '5000'],
            ['marca' => 'AMD', 'tipo' => 'Ryzen 7', 'generacion' => '5000']
        ];

        foreach ($procesadores as $procesador) {
            CatProcesador::create($procesador);
        }
    }
}
