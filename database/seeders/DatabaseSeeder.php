<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            CatalogosSeeder::class,
            EstadosEquipoSeeder::class,
            PermissionSeeder::class,
            CatVersionesOfficeSeeder::class,
            CatSistemasOperativosSeeder::class,
            CatTipoEquipoSeeder::class,
            CatMarcasSeeder::class,
            CatModelosSeeder::class,
            //DatosComputadoraSeeder::class,
            UbicacionesSeeder::class,
            //DiputadosPrueba::class,
            //AsignacionesComputadorasSeeder::class,
            DiscosDuroSeeder::class,
            MemoriaSeeder::class,
            ProcesadoresSeeder::class,
            //ComponenteComputadoraSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345678',
        ]);
        $this->command->info('Inicializacion de los seeders correcta!');
    }
}
