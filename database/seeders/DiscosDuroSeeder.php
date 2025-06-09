<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CatDiscosDuros;

class DiscosDuroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       $discos = [
            // HDDs (Discos Duros Tradicionales)
            ['Capacidad' => '500GB', 'Tipo' => 'HDD'],
            ['Capacidad' => '1TB',  'Tipo' => 'HDD'],
            ['Capacidad' => '2TB',  'Tipo' => 'HDD'],

            // SSDs SATA (2.5" o M.2 SATA)
            ['Capacidad' => '120GB',  'Tipo' => 'SSD SATA'],
            ['Capacidad' => '240GB',  'Tipo' => 'SSD SATA'],
            ['Capacidad' => '256GB',  'Tipo' => 'SSD SATA'],
            ['Capacidad' => '480GB',  'Tipo' => 'SSD SATA'],
            ['Capacidad' => '500GB',  'Tipo' => 'SSD SATA'],
            ['Capacidad' => '512GB',  'Tipo' => 'SSD SATA'],
            ['Capacidad' => '1TB',    'Tipo' => 'SSD SATA'],
            ['Capacidad' => '2TB',    'Tipo' => 'SSD SATA'],

            // SSDs NVMe (M.2 PCIe)
            ['Capacidad' => '128GB',  'Tipo' => 'SSD NVMe'],
            ['Capacidad' => '256GB',  'Tipo' => 'SSD NVMe'],
            ['Capacidad' => '512GB',  'Tipo' => 'SSD NVMe'],
            ['Capacidad' => '1TB',    'Tipo' => 'SSD NVMe'],
            ['Capacidad' => '2TB',    'Tipo' => 'SSD NVMe'],
            ['Capacidad' => '4TB',    'Tipo' => 'SSD NVMe'],
        ];

        foreach ($discos as $disco) {
            CatDiscosDuros::create($disco);
        }
    }
}
