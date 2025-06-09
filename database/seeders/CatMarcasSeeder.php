<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;

class CatMarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tipoEquipoId = \App\Models\TipoEquipo::first()->id;
         $marcas = [
            [
                'nombre' => 'Dell',
                'tipo_equipo_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'HP',
                'tipo_equipo_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Lenovo',
                'tipo_equipo_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'LANIX',
                'tipo_equipo_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'ACCER',
                'tipo_equipo_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
             [
                'nombre' => 'Dell',
                'tipo_equipo_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'HP',
                'tipo_equipo_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Lenovo',
                'tipo_equipo_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'ACER',
                'tipo_equipo_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        
         \DB::table('catmarcas')->insert($marcas);
         $this->command->info('Datos iniciales Marcas, creados exitosamente!');
    }
}
