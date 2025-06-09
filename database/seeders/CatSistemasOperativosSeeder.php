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
            ['nombre' => 'Windows 8.1'],
            ['nombre' => 'Windows 8'],
            ['nombre' => 'Windows 7'],
            ['nombre' => 'Windows 10'],
            ['nombre' => 'Windows 11'],
        ];

        foreach ($sistemas as $sistema) {
            CatSistemaOperativo::create($sistema);
        }
        $this->command->info('Datos de SO creados exitosamente!');
    }
}
