<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DatosComputadora;

class DatosComputadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $computadoras = [
            [
                'nombre' => 'EQUIPO-ADMIN-01',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 1,      // Dell
                'modelo_id' => 1,      // Latitude 5420
                'sistema_operativo_id' => 1, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 1, // Office 2016
                'mac' => '00:1A:2B:3C:4D:5E',
                'ip' => '192.168.1.100',
                'estado_id' => 1,
            ],
        ];

        foreach ($computadoras as $pc) {
            DatosComputadora::create($pc);
        }
        $this->command->info('Pruebas de inventario completa!');
    }
    
}
