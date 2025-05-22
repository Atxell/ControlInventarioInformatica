<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CatDiscosDuros;

class DiscosDuroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $discos = [
            ['Capacidad' => '500GB', 'Tipo' => 'HDD'],
            ['Capacidad' => '1TB', 'Tipo' => 'HDD'],
            ['Capacidad' => '2TB', 'Tipo' => 'HDD'],
            ['Capacidad' => '256GB', 'Tipo' => 'SSD'],
            ['Capacidad' => '512GB', 'Tipo' => 'SSD'],
            ['Capacidad' => '1TB', 'Tipo' => 'SSD'],
            ['Capacidad' => '2TB', 'Tipo' => 'SSD NVMe'],
        ];

        foreach ($discos as $disco) {
            CatDiscosDuros::create($disco);
        }
    }
}
