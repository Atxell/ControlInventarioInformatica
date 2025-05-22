<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComponenteComputadora;
use App\Models\DatosComputadora;
use App\Models\CatProcesador;
use App\Models\CatDiscosDuros;
use App\Models\CatMemorias;

class ComponenteComputadoraSeeder extends Seeder
{
    /*public function run()
    {
        // Obtener algunas computadoras existentes
        $computadoras = DatosComputadora::limit(5)->get();
        
        // Obtener componentes existentes
        $procesadores = CatProcesador::all();
        $discosDuros = CatDiscosDuros::all();
        $memorias = CatMemorias::all();

        // Verificar que hay suficientes datos para relacionar
        if ($computadoras->isEmpty() || $procesadores->isEmpty() || 
            $discosDuros->isEmpty() || $memorias->isEmpty()) {
            $this->command->error('No hay suficientes datos en las tablas relacionadas!');
            $this->command->info('Ejecuta primero los seeders de:');
            $this->command->info('1. DatosComputadora');
            $this->command->info('2. Procesadores');
            $this->command->info('3. DiscosDuros');
            $this->command->info('4. Memorias');
            return;
        }

        $this->command->info('Creando relaciones entre computadoras y componentes...');

        // Crear relaciones para cada computadora
        foreach ($computadoras as $index => $computadora) {
            // Usar componentes en orden circular para evitar errores si hay pocos
            $procesador = $procesadores[$index % $procesadores->count()];
            $discoDuro = $discosDuros[$index % $discosDuros->count()];
            $memoria = $memorias[$index % $memorias->count()];

            ComponenteComputadora::create([
                'computadora_id' => $computadora->id,
                'procesador_id' => $procesador->id,
                'disco_duro_id' => $discoDuro->id,
                'memoria_id' => $memoria->id
            ]);

            $this->command->info("Computadora ID {$computadora->id} equipada con:");
            $this->command->info("- Procesador: {$procesador->marca} {$procesador->tipo}");
            $this->command->info("- Disco Duro: {$discoDuro->Capacidad} {$discoDuro->Tipo}");
            $this->command->info("- Memoria: {$memoria->Capacidad} {$memoria->Generación}");
        }

        $this->command->info('Relaciones creadas exitosamente!');
    }*/
    public function run()
    {
        // Obtener todos los componentes disponibles
       // $procesadores = CatProcesador::all();
        //$discos = CatDiscosDuros::all();
        //$memorias = CatMemorias::all();

            ComponenteComputadora::create([
                'computadora_id' => 1,
                'procesador_id' => 1,
                'disco_duro_id' => 1,
                'memoria_id' => 1  // RAM ID 1
            ]);

            ComponenteComputadora::create([
                'computadora_id' => 2,
                'procesador_id' => 2,
                'disco_duro_id' => 2,
                'memoria_id' => 1  // Misma RAM ID 1
            ]);
            
    }
}