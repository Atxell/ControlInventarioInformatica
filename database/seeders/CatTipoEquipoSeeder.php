<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoEquipo;

class CatTipoEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tipos = ['Laptop', 'Desktop', 'Servidor'];
        
        foreach ($tipos as $tipo) {
            TipoEquipo::create(['name' => $tipo]);
        }
        $this->command->info('Tipos de equipo creados exitosamente!');
    }
}
