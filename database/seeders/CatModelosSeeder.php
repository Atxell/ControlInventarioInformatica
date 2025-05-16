<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modelo;

class CatModelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $modelos = [
            ['marca_id' => 1, 'nombre' => 'Latitude 5420'],
            ['marca_id' => 2, 'nombre' => 'EliteBook 840'],
        ];
        
        foreach ($modelos as $modelo) {
            Modelo::create($modelo);
        }
        $this->command->info('Modelos creados exitosamente!');
    }
}
