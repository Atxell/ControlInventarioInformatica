<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CatSistemaOperativo;

class CatSistemasOperativosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $sistemas = [
            ['nombre' => 'Windows 10 Pro'],
            ['nombre' => 'Windows 11 Pro'],
            ['nombre' => 'Ubuntu 22.04 LTS'],
        ];

        foreach ($sistemas as $sistema) {
            CatSistemaOperativo::create($sistema);
        }
        $this->command->info('Datos de SO creados exitosamente!');
    }
}
