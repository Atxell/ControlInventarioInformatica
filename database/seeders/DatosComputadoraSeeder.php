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
                'Num_inv' => '000001',
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
            ],[
                'Num_inv' => '000002',
                'nombre' => 'EQUIPO-VENTAS-02',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 2,       // HP
                'modelo_id' => 2,      // ProBook 450 G8
                'sistema_operativo_id' => 1, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2019
                'mac' => '00:A1:B2:C3:D4:E5',
                'ip' => '192.168.1.101',
                'estado_id' => 2,
            ],[
                'Num_inv' => '000003',
                'nombre' => 'EQUIPO-CONTAB-03',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 3,       // Lenovo
                'modelo_id' => 2,      // ThinkCentre M720q
                'sistema_operativo_id' => 1, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 1, // Office 2016
                'mac' => '00:F6:E7:D8:C9:BA',
                'ip' => '192.168.1.102',
                'estado_id' => 1,
            ],[
                'Num_inv' => '000004',
                'nombre' => 'EQUIPO-DESARROLLO-04',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 4,       // Apple
                'modelo_id' => 1,      // MacBook Pro
                'sistema_operativo_id' => 2, // macOS
                'licenciaoriginal' => true,
                'version_office_id' => 3, // Office 365
                'mac' => '00:11:22:33:44:55',
                'ip' => '192.168.1.103',
                'estado_id' => 1,
            ],
            [
                'Num_inv' => '000005',
                'nombre' => 'EQUIPO-SOPORTE-05',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 1,       // Dell
                'modelo_id' => 1,      // XPS 13
                'sistema_operativo_id' => 1, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2019
                'mac' => '00:AA:BB:CC:DD:EE',
                'ip' => '192.168.1.104',
                'estado_id' => 1,
            ],
        ];

        foreach ($computadoras as $pc) {
            DatosComputadora::create($pc);
        }
        $this->command->info('Pruebas de inventario completa!');
    }
    
}
