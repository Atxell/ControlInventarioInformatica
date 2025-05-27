<?php

namespace Database\Seeders;

use App\Models\CatEdificios;
use App\Models\CatZonas;
use App\Models\CatCubiculos;
use App\Models\CatArea;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UbicacionesSeeder extends Seeder
{
    public function run()
    {
        // 1. Crear edificios
        $edificios = [
            ['NombreEdificio' => 'A'],
            ['NombreEdificio' => 'B'],
            ['NombreEdificio' => 'C'],
            ['NombreEdificio' => 'D'],
        ];

        foreach ($edificios as $edificio) {
            CatEdificios::create($edificio);
        }

        // 2. Crear zonas por edificio
        $zonas = [
            // Edificio Principal
            ['EdificioID' => 1, 'Planta' => 'A'],
            ['EdificioID' => 1, 'Planta' => 'B'],
            
            // Edificio Legislativo
            ['EdificioID' => 2, 'Planta' => 'A'],
            
            // Edificio Administrativo
            ['EdificioID' => 3, 'Planta' => 'A'],
            ['EdificioID' => 3, 'Planta' => 'S'],


            ['EdificioID' => 4, 'Planta' => 'A'],
            ['EdificioID' => 4, 'Planta' => 'B'],
        ];

        foreach ($zonas as $zona) {
            CatZonas::create($zona);
        }

        // 3. Crear cubículos por zona
        $cubiculos = [
            // Planta Baja - Edificio Principal
            ['ZonaID' => 1, 'NombreCubiculo' => 'Recepción', 'codigo' => 'ED1-PB-001'],
            ['ZonaID' => 1, 'NombreCubiculo' => 'Sala de Espera', 'codigo' => 'ED1-PB-002'],
            
            // Primer Piso - Edificio Principal
            ['ZonaID' => 2, 'NombreCubiculo' => 'Oficina 101', 'codigo' => 'ED1-P1-101'],
            ['ZonaID' => 2, 'NombreCubiculo' => 'Oficina 102', 'codigo' => 'ED1-P1-102'],
            
            // Salón de Sesiones - Edificio Legislativo
            ['ZonaID' => 3, 'NombreCubiculo' => 'Cabina Presidencial', 'codigo' => 'ED2-SS-001'],
        ];

        foreach ($cubiculos as $cubiculo) {
            CatCubiculos::create($cubiculo);
        }

        // 4. Crear áreas administrativas
        $areas = [
            ['NombreArea' => 'Dirección General'],
            ['NombreArea' => 'Sistemas'],
            ['NombreArea' => 'Recursos Humanos'],
            ['NombreArea' => 'Contabilidad'],
            ['NombreArea' => 'Comunicación Social'],
        ];

        foreach ($areas as $area) {
            CatArea::create($area);
        }

        $this->command->info('¡Ubicaciones creadas exitosamente!');
        $this->command->info('Edificios: '.CatEdificios::count());
        $this->command->info('Zonas: '.CatZonas::count());
        $this->command->info('Cubículos: '.CatCubiculos::count());
        $this->command->info('Áreas: '.CatArea::count());
    }
}