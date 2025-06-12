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
            ['EdificioID' => 1, 'Planta' => 'Alta'],//1
            ['EdificioID' => 1, 'Planta' => 'Baja'],//2
            
            // Edificio Legislativo
            ['EdificioID' => 2, 'Planta' => 'Alta'],//3
            
            // Edificio Administrativo
            ['EdificioID' => 3, 'Planta' => 'Alta'],//4
            ['EdificioID' => 3, 'Planta' => 'Sótano'],//5


            ['EdificioID' => 4, 'Planta' => 'Alta'],//6
            ['EdificioID' => 4, 'Planta' => 'Baja'],//7
        ];

        foreach ($zonas as $zona) {
            CatZonas::create($zona);
        }

        // 3. Crear cubículos por zona
        $cubiculos = [
            // Planta Baja - Edificio Principal
            ['ZonaID' => 1, 'NombreCubiculo' => '01', 'codigo' => 'EDA-PA-001'],
            ['ZonaID' => 1, 'NombreCubiculo' => '02', 'codigo' => 'EDA-PA-002'],
            ['ZonaID' => 1, 'NombreCubiculo' => '03', 'codigo' => 'EDA-PA-003'],
            ['ZonaID' => 1, 'NombreCubiculo' => '04', 'codigo' => 'EDA-PA-004'],
            ['ZonaID' => 1, 'NombreCubiculo' => '05', 'codigo' => 'EDA-PA-005'],
            ['ZonaID' => 1, 'NombreCubiculo' => '06', 'codigo' => 'EDA-PA-006'],
            ['ZonaID' => 1, 'NombreCubiculo' => '07', 'codigo' => 'EDA-PA-007'],
            ['ZonaID' => 1, 'NombreCubiculo' => '08', 'codigo' => 'EDA-PA-008'],
            ['ZonaID' => 1, 'NombreCubiculo' => '09', 'codigo' => 'EDA-PA-009'],
            ['ZonaID' => 1, 'NombreCubiculo' => '10', 'codigo' => 'EDA-PA-010'],
            ['ZonaID' => 1, 'NombreCubiculo' => '11', 'codigo' => 'EDA-PA-011'],
            ['ZonaID' => 1, 'NombreCubiculo' => '12', 'codigo' => 'EDA-PA-012'],
            ['ZonaID' => 1, 'NombreCubiculo' => '13', 'codigo' => 'EDA-PA-013'],
            ['ZonaID' => 1, 'NombreCubiculo' => '14', 'codigo' => 'EDA-PA-014'],
            ['ZonaID' => 1, 'NombreCubiculo' => '15', 'codigo' => 'EDA-PA-015'],
            ['ZonaID' => 1, 'NombreCubiculo' => '16', 'codigo' => 'EDA-PA-016'],
            
            // Primer Piso - Edificio Principal,
            ['ZonaID' => 2, 'NombreCubiculo' => '01', 'codigo' => 'EDA-PB-001'],
            ['ZonaID' => 2, 'NombreCubiculo' => '02', 'codigo' => 'EDA-PB-002'],
            ['ZonaID' => 2, 'NombreCubiculo' => '03', 'codigo' => 'EDA-PB-003'],
            ['ZonaID' => 2, 'NombreCubiculo' => '04', 'codigo' => 'EDA-PB-004'],
            ['ZonaID' => 2, 'NombreCubiculo' => '05', 'codigo' => 'EDA-PB-005'],
            ['ZonaID' => 2, 'NombreCubiculo' => '06', 'codigo' => 'EDA-PB-006'],
            ['ZonaID' => 2, 'NombreCubiculo' => '07', 'codigo' => 'EDA-PB-007'],
            ['ZonaID' => 2, 'NombreCubiculo' => '08', 'codigo' => 'EDA-PB-008'],
            ['ZonaID' => 2, 'NombreCubiculo' => '09', 'codigo' => 'EDA-PB-009'],
            ['ZonaID' => 2, 'NombreCubiculo' => '10', 'codigo' => 'EDA-PB-010'],
            ['ZonaID' => 2, 'NombreCubiculo' => '11', 'codigo' => 'EDA-PB-011'],
            ['ZonaID' => 2, 'NombreCubiculo' => '12', 'codigo' => 'EDA-PB-012'],
            ['ZonaID' => 2, 'NombreCubiculo' => '13', 'codigo' => 'EDA-PB-013'],
            ['ZonaID' => 2, 'NombreCubiculo' => '14', 'codigo' => 'EDA-PB-014'],
            ['ZonaID' => 2, 'NombreCubiculo' => '15', 'codigo' => 'EDA-PB-015'],
            ['ZonaID' => 2, 'NombreCubiculo' => '16', 'codigo' => 'EDA-PB-016'],


            ['ZonaID' => 3, 'NombreCubiculo' => '01', 'codigo' => 'EDB-PA-001'],
            ['ZonaID' => 3, 'NombreCubiculo' => '02', 'codigo' => 'EDB-PA-002'],
            ['ZonaID' => 3, 'NombreCubiculo' => '03', 'codigo' => 'EDB-PA-003'],
            ['ZonaID' => 3, 'NombreCubiculo' => '04', 'codigo' => 'EDB-PA-004'],
            ['ZonaID' => 3, 'NombreCubiculo' => '05', 'codigo' => 'EDB-PA-005'],
            ['ZonaID' => 3, 'NombreCubiculo' => '06', 'codigo' => 'EDB-PA-006'],
            ['ZonaID' => 3, 'NombreCubiculo' => '07', 'codigo' => 'EDB-PA-007'],
            ['ZonaID' => 3, 'NombreCubiculo' => '08', 'codigo' => 'EDB-PA-008'],
            ['ZonaID' => 3, 'NombreCubiculo' => '09', 'codigo' => 'EDB-PA-009'],
            ['ZonaID' => 3, 'NombreCubiculo' => '10', 'codigo' => 'EDB-PA-010'],
            ['ZonaID' => 3, 'NombreCubiculo' => '11', 'codigo' => 'EDB-PA-011'],
            ['ZonaID' => 3, 'NombreCubiculo' => '12', 'codigo' => 'EDB-PA-012'],
            ['ZonaID' => 3, 'NombreCubiculo' => '13', 'codigo' => 'EDB-PA-013'],
            ['ZonaID' => 3, 'NombreCubiculo' => '14', 'codigo' => 'EDB-PA-014'],
            ['ZonaID' => 3, 'NombreCubiculo' => '15', 'codigo' => 'EDB-PA-015'],
            ['ZonaID' => 3, 'NombreCubiculo' => '16', 'codigo' => 'EDB-PA-016'],
            

            ['ZonaID' => 4, 'NombreCubiculo' => '01', 'codigo' => 'EDC-PA-001'],
            ['ZonaID' => 4, 'NombreCubiculo' => '02', 'codigo' => 'EDC-PA-002'],
            ['ZonaID' => 4, 'NombreCubiculo' => '03', 'codigo' => 'EDC-PA-003'],
            ['ZonaID' => 4, 'NombreCubiculo' => '04', 'codigo' => 'EDC-PA-004'],
            ['ZonaID' => 4, 'NombreCubiculo' => '05', 'codigo' => 'EDC-PA-005'],
            ['ZonaID' => 4, 'NombreCubiculo' => '06', 'codigo' => 'EDC-PA-006'],
            ['ZonaID' => 4, 'NombreCubiculo' => '07', 'codigo' => 'EDC-PA-007'],
            ['ZonaID' => 4, 'NombreCubiculo' => '08', 'codigo' => 'EDC-PA-008'],
            ['ZonaID' => 4, 'NombreCubiculo' => '09', 'codigo' => 'EDC-PA-009'],
            ['ZonaID' => 4, 'NombreCubiculo' => '10', 'codigo' => 'EDC-PA-010'],
            ['ZonaID' => 4, 'NombreCubiculo' => '11', 'codigo' => 'EDC-PA-011'],
            ['ZonaID' => 4, 'NombreCubiculo' => '12', 'codigo' => 'EDC-PA-012'],
            ['ZonaID' => 4, 'NombreCubiculo' => '13', 'codigo' => 'EDC-PA-013'],
            ['ZonaID' => 4, 'NombreCubiculo' => '14', 'codigo' => 'EDC-PA-014'],
            ['ZonaID' => 4, 'NombreCubiculo' => '15', 'codigo' => 'EDC-PA-015'],
            ['ZonaID' => 4, 'NombreCubiculo' => '16', 'codigo' => 'EDC-PA-016'],

            ['ZonaID' => 5, 'NombreCubiculo' => '01', 'codigo' => 'EDC-PS-001'],
            ['ZonaID' => 5, 'NombreCubiculo' => '02', 'codigo' => 'EDC-PS-002'],
            ['ZonaID' => 5, 'NombreCubiculo' => '03', 'codigo' => 'EDC-PS-003'],
            ['ZonaID' => 5, 'NombreCubiculo' => '04', 'codigo' => 'EDC-PS-004'],
            ['ZonaID' => 5, 'NombreCubiculo' => '05', 'codigo' => 'EDC-PS-005'],

            ['ZonaID' => 6, 'NombreCubiculo' => '01', 'codigo' => 'EDD-PA-001'],
            ['ZonaID' => 6, 'NombreCubiculo' => '02', 'codigo' => 'EDD-PA-002'],
            ['ZonaID' => 6, 'NombreCubiculo' => '03', 'codigo' => 'EDD-PA-003'],
            ['ZonaID' => 6, 'NombreCubiculo' => '04', 'codigo' => 'EDD-PA-004'],
            ['ZonaID' => 6, 'NombreCubiculo' => '05', 'codigo' => 'EDD-PA-005'],
            ['ZonaID' => 6, 'NombreCubiculo' => '06', 'codigo' => 'EDD-PA-006'],
            ['ZonaID' => 6, 'NombreCubiculo' => '07', 'codigo' => 'EDD-PA-007'],
            ['ZonaID' => 6, 'NombreCubiculo' => '08', 'codigo' => 'EDD-PA-008'],
            ['ZonaID' => 6, 'NombreCubiculo' => '09', 'codigo' => 'EDD-PA-009'],
            ['ZonaID' => 6, 'NombreCubiculo' => '10', 'codigo' => 'EDD-PA-010'],
            ['ZonaID' => 6, 'NombreCubiculo' => '11', 'codigo' => 'EDD-PA-011'],
            ['ZonaID' => 6, 'NombreCubiculo' => '12', 'codigo' => 'EDD-PA-012'],
            ['ZonaID' => 6, 'NombreCubiculo' => '13', 'codigo' => 'EDD-PA-013'],
            ['ZonaID' => 6, 'NombreCubiculo' => '14', 'codigo' => 'EDD-PA-014'],
            ['ZonaID' => 6, 'NombreCubiculo' => '15', 'codigo' => 'EDD-PA-015'],
            ['ZonaID' => 6, 'NombreCubiculo' => '16', 'codigo' => 'EDD-PA-016'],

            ['ZonaID' => 7, 'NombreCubiculo' => '01', 'codigo' => 'EDD-PB-001'],
            ['ZonaID' => 7, 'NombreCubiculo' => '02', 'codigo' => 'EDD-PB-002'],
            ['ZonaID' => 7, 'NombreCubiculo' => '03', 'codigo' => 'EDD-PB-003'],
            ['ZonaID' => 7, 'NombreCubiculo' => '04', 'codigo' => 'EDD-PB-004'],
            ['ZonaID' => 7, 'NombreCubiculo' => '05', 'codigo' => 'EDD-PB-005'],
            ['ZonaID' => 7, 'NombreCubiculo' => '06', 'codigo' => 'EDD-PB-006'],
            ['ZonaID' => 7, 'NombreCubiculo' => '07', 'codigo' => 'EDD-PB-007'],
            ['ZonaID' => 7, 'NombreCubiculo' => '08', 'codigo' => 'EDD-PB-008'],
            ['ZonaID' => 7, 'NombreCubiculo' => '09', 'codigo' => 'EDD-PB-009'],
            ['ZonaID' => 7, 'NombreCubiculo' => '10', 'codigo' => 'EDD-PB-010'],
            ['ZonaID' => 7, 'NombreCubiculo' => '11', 'codigo' => 'EDD-PB-011'],
            ['ZonaID' => 7, 'NombreCubiculo' => '12', 'codigo' => 'EDD-PB-012'],
            ['ZonaID' => 7, 'NombreCubiculo' => '13', 'codigo' => 'EDD-PB-013'],
            ['ZonaID' => 7, 'NombreCubiculo' => '14', 'codigo' => 'EDD-PB-014'],
            ['ZonaID' => 7, 'NombreCubiculo' => '15', 'codigo' => 'EDD-PB-015'],
            ['ZonaID' => 7, 'NombreCubiculo' => '16', 'codigo' => 'EDD-PB-016'],
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