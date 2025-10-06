<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComponenteComputadora;
use App\Models\DatosComputadora;
use App\Models\CatProcesador;
use App\Models\CatDiscosDuros;
use App\Models\CatMemorias;

class ComponenteComputadoraSeeder extends Seeder {
    public function run()
    {
        $componentes = [
            // Equipo 00558 - HP ProDesk 600 G1
            [
                'num_inv' => '00558',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (redondeado de 6GB)
            ],
            // Equipo 01058 - Lenovo Laptop
            [
                'num_inv' => '01058',
                'procesador_id' => 1,  // Intel Celeron (por defecto)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 01059 - Lenovo Laptop
            [
                'num_inv' => '01059',
                'procesador_id' => 6,  // Intel Celeron 3rd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 01060 - Lenovo Laptop
            [
                'num_inv' => '01060',
                'procesador_id' => 6,  // Intel Celeron 3rd
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 01061 - Lenovo Laptop
            [
                'num_inv' => '01061',
                'procesador_id' => 6,  // Intel Celeron 3rd
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 01977 - Gigabyte Desktop
            [
                'num_inv' => '01977',
                'procesador_id' => 13, // Intel Core i7 4th
                'disco_duro_id' => 3,  // 2TB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 01979 - HP EliteDesk
            [
                'num_inv' => '01979',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximado para AMD PRO A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipos Dell Vostro 430 (07890, 07893, 07895, 07902, 07903, 07905)
            [
                'num_inv' => '07890',
                'procesador_id' => 4,  // Intel Core i5 2nd (aproximado para i5 1st gen)
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '07893',
                'procesador_id' => 4,  // Intel Core i5 2nd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 (redondeado de 6GB)
            ],
            [
                'num_inv' => '07895',
                'procesador_id' => 4,  // Intel Core i5 2nd
                'disco_duro_id' => 1,  // 500GB HDD (redondeado de 298GB)
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '07902',
                'procesador_id' => 4,  // Intel Core i5 2nd
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '07903',
                'procesador_id' => 4,  // Intel Core i5 2nd
                'disco_duro_id' => 1,  // 500GB HDD (redondeado de 149GB)
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '07905',
                'procesador_id' => 4,  // Intel Core i5 2nd
                'disco_duro_id' => 1,  // 500GB HDD (redondeado de 298GB)
                'memoria_id' => 2,     // 4GB DDR3
            ],
            [
                'num_inv' => '08493',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximado para AMD64)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (redondeado de 6GB)
            ],
            // Equipos HP Compaq Pro 6305 MT (AMD A4-5300B)
            [
                'num_inv' => '08576',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximado para AMD A4)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            [
                'num_inv' => '08581',
                'procesador_id' => 25,
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08584',
                'procesador_id' => 25,
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08592',
                'procesador_id' => 25,
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08594',
                'procesador_id' => 25,
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3 (redondeado de 6GB)
            ],
            [
                'num_inv' => '08595',
                'procesador_id' => 25,
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08596',
                'procesador_id' => 25,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            [
                'num_inv' => '08599',
                'procesador_id' => 25,
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08614',
                'procesador_id' => 25,
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08619',
                'procesador_id' => 25,
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo HP EliteDesk 705 G2 SFF
            [
                'num_inv' => '08625',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximado para AMD PRO A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08628',
                'procesador_id' => 25,
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08644',
                'procesador_id' => 25,
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08645',
                'procesador_id' => 25,
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08646',
                'procesador_id' => 25,
                'disco_duro_id' => 7,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '08648',
                'procesador_id' => 25,
                'disco_duro_id' => 7,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '08649',
                'procesador_id' => 25,
                'disco_duro_id' => 7,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '08651',
                'procesador_id' => 25,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            [
                'num_inv' => '08653',
                'procesador_id' => 25,
                'disco_duro_id' => 7,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '08654',
                'procesador_id' => 25,
                'disco_duro_id' => 2,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '08655',
                'procesador_id' => 25,
                'disco_duro_id' => 7,
                'memoria_id' => 3,
            ],

            [
                'num_inv' => '08658',
                'procesador_id' => 25,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '08659',
                'procesador_id' => 25,
                'disco_duro_id' => 2,
                'memoria_id' => 3,
            ],
            // Equipos Lenovo 32643N2 (Intel i3-3220T)
            [
                'num_inv' => '08745',
                'procesador_id' => 11,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            [
                'num_inv' => '08746',
                'procesador_id' => 11,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            [
                'num_inv' => '08748',
                'procesador_id' => 11,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            [
                'num_inv' => '08749',
                'procesador_id' => 11,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            [
                'num_inv' => '08750',
                'procesador_id' => 11,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // Equipo Gigabyte (Intel Celeron J1800)
            [
                'num_inv' => '08763',
                'procesador_id' => 1,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // Equipo 08766 - Lenovo Laptop (i3-3220T, 500GB, 8GB)
            [
                'num_inv' => '08766',
                'procesador_id' => 8,  // Intel Core i3 3rd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08768 - Lenovo Laptop (i3-3220T, 500GB, 4GB)
            [
                'num_inv' => '08768',
                'procesador_id' => 8,  // Intel Core i3 3rd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 08775 - Lenovo Laptop (i3-3220T, 500GB, 4GB)
            [
                'num_inv' => '08775',
                'procesador_id' => 8,  // Intel Core i3 3rd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 08835 - Dell XPS (i5 4th, 2TB, 12GB -> 16GB)
            [
                'num_inv' => '08835',
                'procesador_id' => 12, // Intel Core i5 4th
                'disco_duro_id' => 3,  // 2TB HDD
                'memoria_id' => 5,     // 16GB DDR3 (aproximación de 12GB)
            ],
            // Equipo 08837 - Dell XPS (i5 4th, 480GB SSD, 12GB -> 16GB)
            [
                'num_inv' => '08837',
                'procesador_id' => 12, // Intel Core i5 4th
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 5,     // 16GB DDR3 (aproximación de 12GB)
            ],
            // Equipo 08853 - HP ProDesk (i3-4330, 480GB SSD, 8GB)
            [
                'num_inv' => '08853',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08855 - HP ProDesk (i3-4330, 500GB, 8GB)
            [
                'num_inv' => '08855',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08857 - HP ProDesk (i3-4330, 1TB, 8GB)
            [
                'num_inv' => '08857',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08859 - HP ProDesk (i5 4th, 500GB, 4GB)
            [
                'num_inv' => '08859',
                'procesador_id' => 12, // Intel Core i5 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 08861 - HP ProDesk (i5 4th, 500GB, 6GB -> 8GB)
            [
                'num_inv' => '08861',
                'procesador_id' => 12, // Intel Core i5 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (aproximación de 6GB)
            ],
            // Equipo 08863 - HP ProDesk (i3-4330, 500GB, 8GB)
            [
                'num_inv' => '08863',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08869 - HP ProDesk (i3-4330, 480GB SSD, 8GB)
            [
                'num_inv' => '08869',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08871 - HP ProDesk (i5 4th, 500GB, 4GB)
            [
                'num_inv' => '08871',
                'procesador_id' => 12, // Intel Core i5 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 08875 - HP ProDesk (i3-4330, 500GB, 4GB)
            [
                'num_inv' => '08875',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 08876 - HP ProDesk 600 G1 (i3-4330, 500GB, 8GB)
            [
                'num_inv' => '08876',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 09114 - HP ProDesk 600 G1 (i3-4330, 1TB, 12GB -> 16GB)
            [
                'num_inv' => '09114',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 5,     // 16GB DDR3 (aproximación de 12GB)
            ],
            // Equipo 09121 - HP ProDesk 600 G1 (i3-4330, 500GB, 8GB)
            [
                'num_inv' => '09121',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 09126 - HP ProDesk 600 G1 (i3-4330, 500GB, 8GB)
            [
                'num_inv' => '09126',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 09134 - HP ProDesk 600 G1 (i3-4330, 500GB, 4GB)
            [
                'num_inv' => '09134',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 09136 - HP ProDesk 600 G1 (i3-4330, 500GB, 4GB)
            [
                'num_inv' => '09136',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 09142 - HP ProDesk 600 G1 (i3-4330, 500GB, 8GB)
            [
                'num_inv' => '09142',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 09143 - HP ProDesk 600 G1 (i3-4330, 500GB, 8GB)
            [
                'num_inv' => '09143',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 09373 - Dell Inspiron 3646 (Celeron J1800, 500GB, 4GB)
            [
                'num_inv' => '09373',
                'procesador_id' => 1,  // Intel Celeron 2nd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 09539 - HP ProDesk 600 G1 (i3-4330, 500GB, 8GB)
            [
                'num_inv' => '09539',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 09550 - HP ProDesk 600 G1 (i3-4330, 500GB, 4GB)
            [
                'num_inv' => '09550',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 09876 - Dell Inspiron 3646 (Celeron J1800, 500GB, 4GB)
            [
                'num_inv' => '09876',
                'procesador_id' => 1,  // Intel Celeron 2nd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 09878 - Dell Inspiron 3646 (Celeron J1800, 500GB, 4GB)
            [
                'num_inv' => '09878',
                'procesador_id' => 1,  // Intel Celeron 2nd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 09881 - Dell Inspiron 3646 (Celeron J1800, 500GB, 4GB)
            [
                'num_inv' => '09881',
                'procesador_id' => 1,  // Intel Celeron 2nd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 09929 - HP ProDesk 405 G2 (AMD E1-6050J, 500GB, 4GB)
            [
                'num_inv' => '09929',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD E1-6050J)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 09935 - HP ProDesk 405 G2 (AMD E1-6050J, 500GB, 8GB)
            [
                'num_inv' => '09935',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD E1-6050J)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 09937 - HP EliteDesk 705 G1 (AMD A10, 1TB, 8GB)
            [
                'num_inv' => '09937',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A10)
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 10040 - Dell Inspiron 3646 (Celeron J1800, 480GB SSD, 4GB)
            [
                'num_inv' => '10040',
                'procesador_id' => 1,  // Intel Celeron 2nd
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 10064 - HP EliteDesk 705 G2 (AMD A8, 500GB, 7GB -> 8GB)
            [
                'num_inv' => '10064',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (aproximación de 7GB)
            ],
            // Equipo 10070 - HP EliteDesk 705 G2 (AMD A8, 480GB SSD, 4GB)
            [
                'num_inv' => '10070',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 10074 - HP EliteDesk 705 G2 (AMD A8, 500GB, 8GB)
            [
                'num_inv' => '10074',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 10076 - HP EliteDesk 705 G2 (AMD A8, 500GB, 8GB)
            [
                'num_inv' => '10076',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 10079 - HP EliteDesk 705 G2 (AMD A8, 500GB, 8GB)
            [
                'num_inv' => '10079',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 10081 - HP EliteDesk 705 G2 (AMD A8, 500GB, 4GB)
            [
                'num_inv' => '10081',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 10088 - HP EliteDesk 705 G2 (AMD A8, 500GB, 4GB)
            [
                'num_inv' => '10088',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 10095 - HP EliteDesk 705 G2 (AMD A8, 500GB, 8GB)
            [
                'num_inv' => '10095',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 10104 - HP EliteDesk 705 G2 (AMD A8, 500GB, 8GB)
            [
                'num_inv' => '10104',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 10105 - HP EliteDesk 705 G2 (AMD A8, 500GB, 8GB)
            [
                'num_inv' => '10105',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 10133 - HP EliteDesk 705 G2 (AMD A8, 500GB, 8GB)
            [
                'num_inv' => '10133',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A8)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 10392 - Dell Latitude 5480 (Intel i5 7th, 512GB SSD, 4GB)
            [
                'num_inv' => '10392',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 9,  // 512GB SSD SATA
                'memoria_id' => 2,     // 4GB DDR3 (aunque es DDR4, pero en el seeder de memorias no hay DDR4 para 4GB, usaremos el ID 2 que es 4GB DDR3 como aproximación)
            ],
            // Equipo 10413 - Dell Latitude 5480 (Intel i5 7th, 512GB SSD, 4GB)
            [
                'num_inv' => '10413',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 9,  // 512GB SSD SATA
                'memoria_id' => 2,     // 4GB DDR3 (aproximación)
            ], // Equipo 10416 - Dell Latitude 5480 (i5-7200U, 512GB SSD, 4GB DDR4)1111111111111
            [
                'num_inv' => '10416',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 9,  // 512GB SSD SATA
                'memoria_id' => 7,     // 4GB DDR4 2400MHz
            ],
            // Equipo 10419 - Dell Latitude 5480 (i5-7200U, 512GB SSD, 4GB DDR4)
            [
                'num_inv' => '10419',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 9,  // 512GB SSD SATA
                'memoria_id' => 7,     // 4GB DDR4 2400MHz
            ],
            // Equipo 10435 - Dell Precision Tower 3620 (i7-7700, 512GB SSD, 16GB DDR4)
            [
                'num_inv' => '10435',
                'procesador_id' => 18, // Intel Core i7 7th
                'disco_duro_id' => 9,  // 512GB SSD SATA (disco principal)
                'memoria_id' => 11,    // 16GB DDR4 2400MHz
            ],
            // Equipo 10457 - Dell OptiPlex 3050 (i5-7500, 500GB HDD, 8GB DDR4)
            [
                'num_inv' => '10457',
                'procesador_id' => 17, // Intel Core i5 7th (i5-7500 es 7th gen)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 8,     // 8GB DDR4 2400MHz
            ],


            // Nuevos equipos Dell OptiPlex 3050
            [
                'num_inv' => '10458',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 7,     // 4GB DDR4 2400MHz
            ],
            [
                'num_inv' => '10459',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 8,     // 8GB DDR4 2400MHz
            ],
            [
                'num_inv' => '10464',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 5,  // 240GB SSD SATA (aproximación de 223GB)
                'memoria_id' => 7,     // 4GB DDR4 2400MHz
            ],
            [
                'num_inv' => '10465',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 7,     // 4GB DDR4 2400MHz
            ],
            [
                'num_inv' => '10466',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 8,     // 8GB DDR4 2400MHz
            ],
            [
                'num_inv' => '10470',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 8,     // 8GB DDR4 2400MHz
            ],
            [
                'num_inv' => '10647',
                'procesador_id' => 17, // Intel Core i5 7th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 8,     // 8GB DDR4 2400MHz
            ],

            // Equipos Dell Vostro 3471
            [
                'num_inv' => '11106',
                'procesador_id' => 16, // Intel Core i3 9th (aproximación, usar i3 8th gen)
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 11,    // 16GB DDR4 (aproximación de 12GB)
            ],
            [
                'num_inv' => '11108',
                'procesador_id' => 17, // Intel Core i5 7th (basado en arquitectura)
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 8,     // 8GB DDR4
            ],
            [
                'num_inv' => '11109',
                'procesador_id' => 16, // Intel Core i3 9th (aproximación)
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 7,     // 4GB DDR4
            ],

            // Equipos Dell Vostro 3490
            [
                'num_inv' => '11121',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 8,     // 8GB DDR4
            ],
            [
                'num_inv' => '11124',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 8,     // 8GB DDR4
            ],

            // Equipos HP 200 G3 AiO
            [
                'num_inv' => '11114',
                'procesador_id' => 20, // Intel Core i3 8th
                'disco_duro_id' => 7,  // 480GB SSD (aproximación de 447GB)
                'memoria_id' => 11,    // 16GB DDR4 (aproximación de 12GB)
            ],
            [
                'num_inv' => '11135',
                'procesador_id' => 20, // Intel Core i3 8th
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 11,    // 16GB DDR4
            ],
            [
                'num_inv' => '11140',
                'procesador_id' => 20, // Intel Core i3 8th
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 11,    // 16GB DDR4
            ],
            // Nuevos equipos HP 200 G3 AiO
            [
                'num_inv' => '11142',
                'procesador_id' => 20, // Intel Core i3 8th
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 11,    // 16GB DDR4 (aproximación de 12GB)
            ],
            [
                'num_inv' => '11143',
                'procesador_id' => 20, // Intel Core i3 8th
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 11,    // 16GB DDR4
            ],
            [
                'num_inv' => '11144',
                'procesador_id' => 20, // Intel Core i3 8th
                'disco_duro_id' => 7,  // 480GB SSD
                'memoria_id' => 11,    // 16GB DDR4
            ],

            // Nuevos equipos Dell OptiPlex 3080
            [
                'num_inv' => '11185',
                'procesador_id' => 23, // Intel Core i5 10th (i5-10500)
                'disco_duro_id' => 10, // 500GB SSD NVMe
                'memoria_id' => 8,     // 8GB DDR4
            ],
            [
                'num_inv' => '11191',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 11,    // 16GB DDR4 (aproximación de 12GB)
            ],

            // Nuevos equipos Dell Vostro 3710
            [
                'num_inv' => '11327',
                'procesador_id' => 24, // Intel Core i7 10th (aproximación para i7-12700 12th gen)
                'disco_duro_id' => 16, // 512GB SSD NVMe
                'memoria_id' => 12,    // 16GB DDR4 3200MHz
            ],
            [
                'num_inv' => '11330',
                'procesador_id' => 23, // Intel Core i5 10th (aproximación para i5-12500 12th gen)
                'disco_duro_id' => 16, // 512GB SSD NVMe
                'memoria_id' => 12,    // 16GB DDR4 3200MHz
            ],
            [
                'num_inv' => '11339',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 16, // 512GB SSD NVMe
                'memoria_id' => 12,    // 16GB DDR4 3200MHz
            ],

            // Nuevos equipos HP 280 G5 SFF
            [
                'num_inv' => '11351',
                'procesador_id' => 23, // Intel Core i5 10th (i5-10505)
                'disco_duro_id' => 15, // 256GB SSD NVMe
                'memoria_id' => 8,     // 8GB DDR4 3200MHz
            ],
            [
                'num_inv' => '11353',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 15, // 256GB SSD NVMe
                'memoria_id' => 8,     // 8GB DDR4 3200MHz
            ],
            [
                'num_inv' => '11358',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 15, // 256GB SSD NVMe
                'memoria_id' => 8,     // 8GB DDR4 3200MHz
            ],
            [
                'num_inv' => '11359',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 15, // 256GB SSD NVMe
                'memoria_id' => 8,     // 8GB DDR4 3200MHz
            ],
            [
                'num_inv' => '11363',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 15, // 256GB SSD NVMe
                'memoria_id' => 8,     // 8GB DDR4 3200MHz
            ],
            // Equipo 11364 - HP 280 G5 SFF (i5-10505, 240GB SSD, 8GB DDR4)
            [
                'num_inv' => '11364',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 5,  // 240GB SSD SATA
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 11369 - HP 280 G5 SFF (i5-10505, 240GB SSD, 8GB DDR4)
            [
                'num_inv' => '11369',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 5,  // 240GB SSD SATA
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 11373 - HP 280 G5 SFF (i5-10505, 240GB SSD, 8GB DDR4)
            [
                'num_inv' => '11373',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 5,  // 240GB SSD SATA
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 11646 - LENOVO Laptop (i7-12700, 512GB SSD, 16GB DDR4)
            [
                'num_inv' => '11646',
                'procesador_id' => 24, // Intel Core i7 10th
                'disco_duro_id' => 16, // 512GB SSD NVMe
                'memoria_id' => 11,    // 16GB DDR4
            ],
            // Equipo 11647 - LENOVO Laptop (i7-12700, 512GB SSD, 16GB DDR4)
            [
                'num_inv' => '11647',
                'procesador_id' => 24, // Intel Core i7 10th
                'disco_duro_id' => 16, // 512GB SSD NVMe
                'memoria_id' => 11,    // 16GB DDR4
            ],
            // Equipo 11661 - LENOVO Laptop (i7-12700, 512GB SSD, 16GB DDR4)
            [
                'num_inv' => '11661',
                'procesador_id' => 24, // Intel Core i7 10th
                'disco_duro_id' => 16, // 512GB SSD NVMe
                'memoria_id' => 11,    // 16GB DDR4
            ],
            // Equipo 11664 - LENOVO Laptop (i7-12700, 512GB SSD, 16GB DDR4)
            [
                'num_inv' => '11664',
                'procesador_id' => 24, // Intel Core i7 10th
                'disco_duro_id' => 16, // 512GB SSD NVMe
                'memoria_id' => 11,    // 16GB DDR4
            ],
            // Equipo 11666 - HP 280 G5 SFF (i5-10505, 500GB SSD, 8GB DDR4)
            [
                'num_inv' => '11666',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 8,  // 500GB SSD SATA
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 11667 - HP 280 G5 SFF (i5-10505, 500GB SSD, 8GB DDR4)
            [
                'num_inv' => '11667',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 8,  // 500GB SSD SATA
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 11674 - HP 280 G5 SFF (i7-10700, 500GB SSD, 8GB DDR4)
            [
                'num_inv' => '11674',
                'procesador_id' => 24, // Intel Core i7 10th
                'disco_duro_id' => 8,  // 500GB SSD SATA
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 11681 - HP 280 G5 SFF (i5-10505, 500GB SSD, 8GB DDR4)
            [
                'num_inv' => '11681',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 8,  // 500GB SSD SATA
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 11682 - HP 280 G5 SFF (i5-10505, 500GB SSD, 8GB DDR4)
            [
                'num_inv' => '11682',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 8,  // 500GB SSD SATA
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 11683 - HP 280 G5 SFF (i5-10505, 500GB SSD, 8GB DDR4)
            [
                'num_inv' => '11683',
                'procesador_id' => 23, // Intel Core i5 10th
                'disco_duro_id' => 8,  // 500GB SSD SATA
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 90980 - HP Compaq Pro 6305 MT (AMD A4-5300B, 480GB SSD, 8GB DDR3)
            [
                'num_inv' => '90980',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 7,  // 480GB SSD SATA
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo E01951 - Gigabyte Desktop (i7-4770, 2TB HDD, 16GB DDR3)
            [
                'num_inv' => 'E01951',
                'procesador_id' => 13, // Intel Core i7 4th
                'disco_duro_id' => 3,  // 2TB HDD
                'memoria_id' => 5,     // 16GB DDR3
            ],
            // Agregar después del último componente existente en el array $componentes

            // Equipo 01110 - Dell Vostro 3471 (i3-9100, 1TB HDD, 4GB DDR4)
            [
                'num_inv' => '01110',
                'procesador_id' => 20, // Intel Core i3 8th
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 7,     // 4GB DDR4
            ],
            // Equipo 06789 - ASUS Laptop (i3-1115G4, 256GB SSD NVMe, 8GB DDR4)
            [
                'num_inv' => '06789',
                'procesador_id' => 22, // Intel Core i3 10th
                'disco_duro_id' => 15, // 256GB SSD NVMe
                'memoria_id' => 8,     // 8GB DDR4
            ],
            // Equipo 08575 - HP Compaq Pro 6305 MT (AMD A4-5300B, 480GB SSD, 8GB DDR3)
            [
                'num_inv' => '08575',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 7,  // 480GB SSD SATA
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08580 - HP Compaq Pro 6305 MT (AMD A4-5300B, 240GB SSD, 4GB DDR3)
            [
                'num_inv' => '08580',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 5,  // 240GB SSD SATA
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 08583 - HP Compaq Pro 6305 MT (AMD A4-5300B, 500GB HDD, 4GB DDR3)
            [
                'num_inv' => '08583',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            // Equipo 08585 - HP Compaq Pro 6305 MT (AMD A4-5300B, 500GB HDD, 22GB -> 16GB DDR3)
            [
                'num_inv' => '08585',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 5,     // 16GB DDR3 (aproximación de 22GB)
            ],
            // Equipo 08588 - HP Compaq Pro 6305 MT (AMD A4-5300B, 500GB HDD, 12GB -> 16GB DDR3)
            [
                'num_inv' => '08588',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 5,     // 16GB DDR3 (aproximación de 12GB)
            ],
             [
                'num_inv' => '08590',
                'procesador_id' => 24, // AMD Ryzen 3 3000 (Aprox. AMD A4-5300B)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (real 7.45GB)
            ],
            // Equipo 08593 (8GB DDR3, 500GB HDD)
            [
                'num_inv' => '08593',
                'procesador_id' => 24, // AMD Ryzen 3 3000 (Aprox. AMD A4-5300B)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (real 7.45GB)
            ],
            // Equipo 08598 (8GB DDR3, 480GB SSD SATA y 500GB HDD)
            [
                'num_inv' => '08598',
                'procesador_id' => 24, // AMD Ryzen 3 3000 (Aprox. AMD A4-5300B)
                'disco_duro_id' => 7,  // 480GB SSD SATA (Principal)
                'memoria_id' => 3,     // 8GB DDR3 (real 7.45GB)
            ],
            // Equipo 08600 (6GB DDR3 -> 8GB DDR3, 500GB HDD)
            [
                'num_inv' => '08600',
                'procesador_id' => 24, // AMD Ryzen 3 3000 (Aprox. AMD A4-5300B)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (real 5.45GB -> Aprox. 8GB)
            ],
            // Equipo 08602 (6GB DDR3 -> 8GB DDR3, 500GB HDD)
            [
                'num_inv' => '08602',
                'procesador_id' => 24, // AMD Ryzen 3 3000 (Aprox. AMD A4-5300B)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (real 7.45GB)
            ],
            // Equipo 08603 (6GB DDR3 -> 8GB DDR3, 500GB HDD)
            [
                'num_inv' => '08603',
                'procesador_id' => 24, // AMD Ryzen 3 3000 (Aprox. AMD A4-5300B)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (real 5.45GB -> Aprox. 8GB)
            ],
            // Equipo 08604 (8GB DDR3, 500GB HDD)
            [
                'num_inv' => '08604',
                'procesador_id' => 24, // AMD Ryzen 3 3000 (Aprox. AMD A4-5300B)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (real 7.45GB)
            ],
            // Equipo 08605 (8GB DDR3, 500GB HDD)
            [
                'num_inv' => '08605',
                'procesador_id' => 24, // AMD Ryzen 3 3000 (Aprox. AMD A4-5300B)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (real 7.45GB)
            ],
            // Equipo 08618 (8GB DDR3, 500GB HDD)
            [
                'num_inv' => '08618',
                'procesador_id' => 24, // AMD Ryzen 3 3000 (Aprox. AMD A4-5300B)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (real 7.45GB)
            ],

            // Equipo 08623 - HP Compaq Pro 6305 MT (AMD A4-5300B, 500GB HDD, 8GB DDR3)
            [
                'num_inv' => '08623',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08626 - HP Compaq Pro 6305 MT (AMD A4-5300B, 500GB HDD, 8GB DDR3)
            [
                'num_inv' => '08626',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08632 - HP Compaq Pro 6305 MT (AMD A4-5300B, 500GB HDD, 8GB DDR3)
            [
                'num_inv' => '08632',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08633 - HP Compaq Pro 6305 MT (AMD A4-5300B, 500GB HDD, 8GB DDR3)
            [
                'num_inv' => '08633',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08634 - HP Compaq Pro 6305 MT (AMD A4-5300B, 500GB HDD, 8GB DDR3)
            [
                'num_inv' => '08634',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08636 - HP Compaq Pro 6305 MT (AMD A4-5300B, 480GB SSD, 6GB -> 8GB DDR3)
            [
                'num_inv' => '08636',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 7,  // 480GB SSD SATA (aproximación de 447GB)
                'memoria_id' => 3,     // 8GB DDR3 (aproximación de 6GB)
            ],
            // Equipo 08637 - HP ProDesk 600 G1 SFF (Intel Core i3-4330, 500GB HDD, 8GB DDR3)
            [
                'num_inv' => '08637',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3
            ],
            // Equipo 08640 - HP Compaq Pro 6305 MT (AMD A4-5300B, 500GB HDD, 6GB -> 8GB DDR3)
            [
                'num_inv' => '08640',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 (aproximación de 6GB)
            ],
            // Equipo 08643 - HP Compaq Pro 6305 MT (AMD A4-5300B, 320GB HDD, 8GB DDR3)
            [
                'num_inv' => '08643',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación)
                'disco_duro_id' => 1,  // 500GB HDD (320GB no existe, usamos 500GB como valor común)
                'memoria_id' => 3,     // 8GB DDR3
            ],
            [
                'num_inv' => '08656',
                'procesador_id' => 25, // AMD Ryzen 5 3000 (aproximación para AMD A4-5300B)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 (real 3.45GB -> 4GB)
            ],
            [
                'num_inv' => '08661',
                'procesador_id' => 25, // AMD Ryzen 5 3000
                'disco_duro_id' => 7,  // 480GB SSD (principal KINGSTON SA400S37480G)
                'memoria_id' => 3,     // 8GB DDR3 (real 7.45GB -> 8GB)
            ],
            [
                'num_inv' => '08662',
                'procesador_id' => 25, // AMD Ryzen 5 3000
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 (real 3.45GB -> 4GB)
            ],
            [
                'num_inv' => '08664',
                'procesador_id' => 25, // AMD Ryzen 5 3000
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 (real 3.45GB -> 4GB)
            ],
            [
                'num_inv' => '08666',
                'procesador_id' => 25, // AMD Ryzen 5 3000
                'disco_duro_id' => 7,  // 480GB SSD (principal KINGSTON SA400S37480G)
                'memoria_id' => 3,     // 8GB DDR3 (real 7.45GB -> 8GB)
            ],
            [
                'num_inv' => '08668',
                'procesador_id' => 25, // AMD Ryzen 5 3000
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 (real 3.45GB -> 4GB)
            ],

            // Equipo Dell Vostro 3471 (Intel i3-9100)
            [
                'num_inv' => '08667',
                'procesador_id' => 20, // Intel Core i3 8th (aproximación para i3-9100 9th gen)
                'disco_duro_id' => 2,  // 1TB HDD (WDC WD10EZEX-75WN4A1)
                'memoria_id' => 7,     // 4GB DDR4 2400MHz (real 4GB DDR4 2666MHz)
            ],

            // Equipos Lenovo 32643N2 (Intel i3-3220T)
            [
                'num_inv' => '08764',
                'procesador_id' => 8,  // Intel Core i3 3rd (i3-3220T)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            [
                'num_inv' => '08770',
                'procesador_id' => 8,  // Intel Core i3 3rd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            [
                'num_inv' => '08774',
                'procesador_id' => 8,  // Intel Core i3 3rd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            [
                'num_inv' => '08776',
                'procesador_id' => 8,  // Intel Core i3 3rd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            [
                'num_inv' => '08778',
                'procesador_id' => 8,  // Intel Core i3 3rd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            [
                'num_inv' => '08781',
                'procesador_id' => 8,  // Intel Core i3 3rd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3
            ],
            [
                'num_inv' => '08828',
                'procesador_id' => 25, // Intel Xeon (aproximado a Core i7 10th)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 5,     // 16GB DDR3 1600MHz (redondeado de 18GB)
            ],
            // 08856 - HP ProDesk 600 G1 (Core i3-4330, 8GB DDR3, 500GB HDD)
            [
                'num_inv' => '08856',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 08860 - HP Pro 3130 (Core i3-550, 5GB DDR3, 500GB HDD)
            [
                'num_inv' => '08860',
                'procesador_id' => 3,  // Intel Core i3 2nd (aproximado)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 1,     // 4GB DDR3 1333MHz (redondeado de 5GB)
            ],
            // 08862 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '08862',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 08864 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '08864',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 08872 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '08872',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 08874 - HP ProDesk 600 G1 (Core i3-4330, 12GB DDR3, 500GB HDD)
            [
                'num_inv' => '08874',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 5,     // 16GB DDR3 1600MHz (redondeado de 12GB)
            ],
            // 09108 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09108',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 09112 - HP ProDesk 600 G1 (Core i3-4330, 8GB DDR3, 480GB SSD)
            [
                'num_inv' => '09112',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 7,  // 480GB SSD SATA
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 09113 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09113',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 09115 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09115',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
                // 09555 - HP ProDesk 600 G1 SFF (i3-4330, 4GB DDR3, 500GB HDD)
                [
                    'num_inv' => '09555',
                    'procesador_id' => 11, // Intel Core i3 4th
                    'disco_duro_id' => 1,  // 500GB HDD
                    'memoria_id' => 2,     // 4GB DDR3 1600MHz
                ],
                // 09116 - HP ProDesk 600 G1 SFF (i3-4330, 8GB DDR3, 500GB HDD)
                [
                    'num_inv' => '09116',
                    'procesador_id' => 11, // Intel Core i3 4th
                    'disco_duro_id' => 1,  // 500GB HDD
                    'memoria_id' => 3,     // 8GB DDR3 1600MHz
                ],
                // 09118 - HP ProDesk 600 G1 SFF (i3-4330, 8GB DDR3, 500GB HDD)
                [
                    'num_inv' => '09118',
                    'procesador_id' => 11, // Intel Core i3 4th
                    'disco_duro_id' => 1,  // 500GB HDD
                    'memoria_id' => 3,     // 8GB DDR3 1600MHz
                ],
                    // 09123 - HP ProDesk 600 G1 SFF (i3-4330, 6GB DDR3, 500GB HDD)
                [
                    'num_inv' => '09123',
                    'procesador_id' => 11, // Intel Core i3 4th
                    'disco_duro_id' => 1,  // 500GB HDD
                    'memoria_id' => 1,     // 4GB DDR3 1333MHz (aprox. 6GB)
                ],
                    // 09129 - HP ProDesk 600 G1 SFF (i3-4330, 4GB DDR3, 500GB HDD)
                [
                    'num_inv' => '09129',
                    'procesador_id' => 11, // Intel Core i3 4th
                    'disco_duro_id' => 1,  // 500GB HDD
                    'memoria_id' => 2,     // 4GB DDR3 1600MHz
                ],
                    // 09131 - HP ProDesk 600 G1 SFF (i3-4330, 4GB DDR3, 500GB HDD)
                    [
                        'num_inv' => '09131',
                        'procesador_id' => 11, // Intel Core i3 4th
                        'disco_duro_id' => 1,  // 500GB HDD
                        'memoria_id' => 2,     // 4GB DDR3 1600MHz
                    ],
                // 09120 - HP ProDesk 600 G1 SFF (i3-4330, 6GB DDR3, 500GB HDD)
                [
                    'num_inv' => '09120',
                    'procesador_id' => 11, // Intel Core i3 4th
                    'disco_duro_id' => 1,  // 500GB HDD
                    'memoria_id' => 1,     // 4GB DDR3 1333MHz (aprox. 6GB)
                ],
                // 09122 - HP ProDesk 600 G1 SFF (i3-4330, 4GB DDR3, 500GB HDD)
                [
                    'num_inv' => '09122',
                    'procesador_id' => 11, // Intel Core i3 4th
                    'disco_duro_id' => 1,  // 500GB HDD
                    'memoria_id' => 2,     // 4GB DDR3 1600MHz
                ],
                [ 'num_inv' => '09133', 'procesador_id' => 11, 'disco_duro_id' => 1, 'memoria_id' => 3 ],
                [ 'num_inv' => '09137', 'procesador_id' => 11, 'disco_duro_id' => 1, 'memoria_id' => 3 ],
                [ 'num_inv' => '09540', 'procesador_id' => 11, 'disco_duro_id' => 1, 'memoria_id' => 2 ], 
                            // 09541 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09541',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 09542 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09542',
                'procesador_id' => 11,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // 09545 - HP ProDesk 600 G1 (Core i3-4330, 8GB DDR3, 480GB SSD + 500GB HDD)
            [
                'num_inv' => '09545',
                'procesador_id' => 11,
                'disco_duro_id' => 7,  // 480GB SSD SATA (disco principal)
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 09547 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09547',
                'procesador_id' => 11,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // 09548 - HP ProDesk 600 G1 (Core i3-4330, 8GB DDR3, 480GB SSD)
            [
                'num_inv' => '09548',
                'procesador_id' => 11,
                'disco_duro_id' => 7,  // 480GB SSD SATA
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 09549 - HP ProDesk 600 G1 (Core i3-4330, 12GB DDR3, 500GB HDD)
            [
                'num_inv' => '09549',
                'procesador_id' => 11,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 5,     // 16GB DDR3 1600MHz (redondeado de 12GB)
            ],
                        // 09553 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09553',
                'procesador_id' => 11, // Intel Core i3 4th
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],

            // 09561 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09561',
                'procesador_id' => 11,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // 09565 - HP ProDesk 600 G1 (Core i3-4330, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09565',
                'procesador_id' => 11,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // 09590 - HP ProDesk 400 G1 (Core i3-4130, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09590',
                'procesador_id' => 11, // Intel Core i3 4th (aproximado del 4130)
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 09872 - Dell OptiPlex 3080 (Core i5-10500, 16GB DDR4, 480GB SSD)
            [
                'num_inv' => '09872',
                'procesador_id' => 24, // Intel Core i5 10th
                'disco_duro_id' => 7,  // 480GB SSD SATA
                'memoria_id' => 12,    // 16GB DDR4 3200MHz (redondeado de 2666MHz)
            ],
            // 09874 - Dell Inspiron 3646 (Celeron J1800, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09874',
                'procesador_id' => 1,  // Intel Celeron 2nd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 09882 - Dell Inspiron 3646 (Celeron J1800, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '09882',
                'procesador_id' => 1,  // Intel Celeron 2nd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            

            // 10039 - Dell Inspiron 3646 (Celeron J1800, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10039',
                'procesador_id' => 1,  // Intel Celeron 2nd
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10065 - HP EliteDesk 705 G2 (AMD A8-8650B, 12GB DDR3, 1TB HDD)
            [
                'num_inv' => '10065',
                'procesador_id' => 27, // AMD Ryzen 3 3000 (aproximado del A8-8650B)
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 5,     // 16GB DDR3 1600MHz (redondeado de 12GB)
            ],
            // 10066 - HP EliteDesk 705 G2 (AMD A8-8650B, 8GB DDR3, 1TB HDD)
            [
                'num_inv' => '10066',
                'procesador_id' => 27, // AMD Ryzen 3 3000
                'disco_duro_id' => 2,  // 1TB HDD
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 10067 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10067',
                'procesador_id' => 27, // AMD Ryzen 3 3000
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
                        // 10068 - HP EliteDesk 705 G2 (AMD A8-8650B, 8GB DDR3, 480GB SSD)
            [
                'num_inv' => '10068',
                'procesador_id' => 27, // AMD Ryzen 3 3000 (aproximado del A8-8650B)
                'disco_duro_id' => 7,  // 480GB SSD SATA
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 10069 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10069',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10071 - HP EliteDesk 705 G2 (AMD A8-8650B, 8GB DDR3, 480GB SSD)
            [
                'num_inv' => '10071',
                'procesador_id' => 27,
                'disco_duro_id' => 7,  // 480GB SSD SATA
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 10072 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10072',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10073 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10073',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],

            // 10077 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10077',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10078 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 240GB SSD + 500GB HDD)
            [
                'num_inv' => '10078',
                'procesador_id' => 27,
                'disco_duro_id' => 6,  // 240GB SSD SATA (disco principal)
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10080 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10080',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
                        // 10082 - HP EliteDesk 705 G2 (AMD A8-8650B, 8GB DDR3, 480GB SSD)
            [
                'num_inv' => '10082',
                'procesador_id' => 27, // AMD Ryzen 3 3000 (aproximado del A8-8650B)
                'disco_duro_id' => 7,  // 480GB SSD SATA
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 10083 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10083',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10089 - HP EliteDesk 705 G2 (AMD A8-8650B, 16GB DDR3, 480GB SSD)
            [
                'num_inv' => '10089',
                'procesador_id' => 27,
                'disco_duro_id' => 7,  // 480GB SSD SATA
                'memoria_id' => 5,     // 16GB DDR3 1600MHz
            ],
            // 10092 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10092',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10096 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10096',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10098 - HP EliteDesk 705 G2 (AMD A8-8650B, 8GB DDR3, 500GB HDD)
            [
                'num_inv' => '10098',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 10099 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10099',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10100 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10100',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10101 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10101',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10102 - HP EliteDesk 705 G2 (AMD A8-8650B, 4GB DDR3, 500GB HDD)
            [
                'num_inv' => '10102',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 2,     // 4GB DDR3 1600MHz
            ],
            // 10103 - HP EliteDesk 705 G2 (AMD A8-8650B, 8GB DDR3, 480GB SSD + 500GB HDD)
            [
                'num_inv' => '10103',
                'procesador_id' => 27,
                'disco_duro_id' => 7,  // 480GB SSD SATA (disco principal)
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            // 10106 - HP EliteDesk 705 G2 (AMD A8-8650B, 8GB DDR3, 500GB HDD)
            [
                'num_inv' => '10106',
                'procesador_id' => 27,
                'disco_duro_id' => 1,  // 500GB HDD
                'memoria_id' => 3,     // 8GB DDR3 1600MHz
            ],
            [
                'num_inv' => '10107',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // 10108 - 8GB RAM, 480GB SSD
            [
                'num_inv' => '10108',
                'procesador_id' => 30,
                'disco_duro_id' => 8,
                'memoria_id' => 3,
            ],
            // 10110 - 4GB RAM, 500GB HDD
            [
                'num_inv' => '10110',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // 10111 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10111',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            // 10112 - 4GB RAM, 500GB HDD
            [
                'num_inv' => '10112',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // 10114 - 4GB RAM, 500GB HDD
            [
                'num_inv' => '10114',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 2,
            ],
            // 10118 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10118',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            // 10119 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10119',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            // 10120 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10120',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            // 10122 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10122',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            // 10123 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10123',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            // 10124 - 8GB RAM, 240GB SSD (disco principal)
            [
                'num_inv' => '10124',
                'procesador_id' => 30,
                'disco_duro_id' => 4,
                'memoria_id' => 3,
            ],
            // 10126 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10126',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            // 10127 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10127',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            // 10128 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10128',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            // 10130 - 8GB RAM, 500GB HDD
            [
                'num_inv' => '10130',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '10131',
                'procesador_id' => 30,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '10132',
                'procesador_id' => 30,
                'disco_duro_id' => 8,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '10139',
                'procesador_id' => 13,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '10140',
                'procesador_id' => 13,
                'disco_duro_id' => 1,
                'memoria_id' => 3,
            ],
            [
                'num_inv' => '10389',
                'procesador_id' => 17,
                'disco_duro_id' => 10,
                'memoria_id' => 6,
            ],

            [
                'num_inv' => '10394',
                'procesador_id' => 17,
                'disco_duro_id' => 10,
                'memoria_id' => 6,
            ],

            [
                'num_inv' => '104191',
                'procesador_id' => 17,
                'disco_duro_id' => 10,
                'memoria_id' => 6,
            ],
            [
                'num_inv' => '10446',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10447',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10448',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10449',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10450',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10451',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10452',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10453',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10454',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10455',
                'procesador_id' => 19,
                'disco_duro_id' => 10,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '10456',
                'procesador_id' => 16,
                'disco_duro_id' => 1,
                'memoria_id' => 6,
            ],
            [
                'num_inv' => '10460',
                'procesador_id' => 16,
                'disco_duro_id' => 1,
                'memoria_id' => 6,
            ],
            [
                'num_inv' => '10461',
                'procesador_id' => 16,
                'disco_duro_id' => 1,
                'memoria_id' => 6,
            ],
            [
                'num_inv' => '10900',
                'procesador_id' => 14,
                'disco_duro_id' => 8,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11096',
                'procesador_id' => 22,
                'disco_duro_id' => 4,
                'memoria_id' => 6,
            ],
            [
                'num_inv' => '11097',
                'procesador_id' => 22,
                'disco_duro_id' => 2,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '11099',
                'procesador_id' => 22,
                'disco_duro_id' => 10,
                'memoria_id' => 6,
            ],
            [
                'num_inv' => '11107',
                'procesador_id' => 22,
                'disco_duro_id' => 2,
                'memoria_id' => 6,
            ],
            [
                'num_inv' => '11116',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11117',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '111351',
                'procesador_id' => 20,
                'disco_duro_id' => 8,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11136',
                'procesador_id' => 20,
                'disco_duro_id' => 8,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '111401',
                'procesador_id' => 20,
                'disco_duro_id' => 8,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11163',
                'procesador_id' => 25,
                'disco_duro_id' => 2,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '11164',
                'procesador_id' => 25,
                'disco_duro_id' => 11,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '11166',
                'procesador_id' => 25,
                'disco_duro_id' => 2,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '11167',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11172',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11173',
                'procesador_id' => 24,
                'disco_duro_id' => 7,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11174',
                'procesador_id' => 24,
                'disco_duro_id' => 15,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11175',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '11176',
                'procesador_id' => 24,
                'disco_duro_id' => 7,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11177',
                'procesador_id' => 24,
                'disco_duro_id' => 15,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11178',
                'procesador_id' => 24,
                'disco_duro_id' => 15,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11179',
                'procesador_id' => 24,
                'disco_duro_id' => 16,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11180',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11181',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11182',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11183',
                'procesador_id' => 24,
                'disco_duro_id' => 7,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '11184',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11186',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11187',
                'procesador_id' => 24,
                'disco_duro_id' => 7,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11188',
                'procesador_id' => 24,
                'disco_duro_id' => 7,
                'memoria_id' => 11,
            ],
            [
                'num_inv' => '11189',
                'procesador_id' => 24,
                'disco_duro_id' => 2,
                'memoria_id' => 9,
            ],
            [
                'num_inv' => '11326',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11328',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11329',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11331',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11332',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11333',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11334',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11335',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11336',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11337',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11338',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11340',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11341',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11342',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11343',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11344',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11345',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11346',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 13,
            ],
            [
                'num_inv' => '11348',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11349',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11350',
                'procesador_id' => 26,
                'disco_duro_id' => 14,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11352',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11354',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11355',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11356',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11360',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11361',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11362',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11365',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11366',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11367',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11368',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11370',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11371',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11372',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11375',
                'procesador_id' => 24,
                'disco_duro_id' => 14,
                'memoria_id' => 10,
            ],
            // HP Laptop - 11385
            [
                'num_inv' => '11385',
                'procesador_id' => 24, // Intel Core i5 10th (aproximado para 11th Gen i5-1135G7)
                'disco_duro_id' => 14, // 256GB SSD NVMe
                'memoria_id' => 10,    // 8GB DDR4 3200MHz
            ],
            // Lenovo Desktops - todos con i7-12700 (12th Gen)
            [
                'num_inv' => '11641',
                'procesador_id' => 26, // Intel Core i7 12th (agregar si no existe)
                'disco_duro_id' => 15, // 512GB SSD NVMe
                'memoria_id' => 12,    // 16GB DDR4 3200MHz
            ],
            [
                'num_inv' => '11642',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11643',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11644',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11645',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],

            [
                'num_inv' => '11651',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11652',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11653',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11654',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11655',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11656',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11659',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
                        // ... componentes anteriores ...

            // Nuevos componentes
            [
                'num_inv' => '11660',
                'procesador_id' => 26, // i7-12700 (12th Gen)
                'disco_duro_id' => 15, // 512GB SSD NVMe
                'memoria_id' => 12,    // 16GB DDR4 3200MHz
            ],
            [
                'num_inv' => '11662',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11663',
                'procesador_id' => 26,
                'disco_duro_id' => 15,
                'memoria_id' => 12,
            ],
            [
                'num_inv' => '11668',
                'procesador_id' => 25, // i5-10505 (10th Gen) - necesitaríamos agregar este procesador
                'disco_duro_id' => 15, // 512GB SSD NVMe
                'memoria_id' => 10,    // 8GB DDR4 3200MHz
            ],
            [
                'num_inv' => '11670',
                'procesador_id' => 25,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11671',
                'procesador_id' => 27, // i7-10700 (10th Gen) - necesitaríamos agregar este procesador
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11672',
                'procesador_id' => 27,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11673',
                'procesador_id' => 27,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11675',
                'procesador_id' => 25,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11676',
                'procesador_id' => 25,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11677',
                'procesador_id' => 25,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11678',
                'procesador_id' => 25,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11679',
                'procesador_id' => 25,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11680',
                'procesador_id' => 25,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11684',
                'procesador_id' => 25,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11685',
                'procesador_id' => 25,
                'disco_duro_id' => 15,
                'memoria_id' => 10,
            ],
            [
                'num_inv' => '11686',
                'procesador_id' => 26, // i7-1255U (12th Gen) - asumo que es similar a i7-12700
                'disco_duro_id' => 15, // 512GB SSD NVMe
                'memoria_id' => 12,    // 16GB DDR4 3200MHz
            ],
            // Agregar al array existente
// Dell OptiPlex SFF 7020 con i5-12500
[
    'num_inv' => '11747',
    'procesador_id' => 31, // Intel Core i5 12th
    'disco_duro_id' => 15, // 512GB SSD NVMe
    'memoria_id' => 16,    // 16GB DDR5 5600MHz
],
[
    'num_inv' => '11748',
    'procesador_id' => 31,
    'disco_duro_id' => 15,
    'memoria_id' => 16,
],
[
    'num_inv' => '11749',
    'procesador_id' => 31,
    'disco_duro_id' => 15,
    'memoria_id' => 16,
],
[
    'num_inv' => '11750',
    'procesador_id' => 31,
    'disco_duro_id' => 15,
    'memoria_id' => 16,
],
[
    'num_inv' => '11752',
    'procesador_id' => 31,
    'disco_duro_id' => 15,
    'memoria_id' => 16,
],
// Dell Vostro 430 con i5-750
[
    'num_inv' => 'E00261',
    'procesador_id' => 32, // Intel Core i5 1st
    'disco_duro_id' => 2,  // 500GB HDD
    'memoria_id' => 2,    // 4GB DDR3
],
// Lenovo Laptops con Celeron J3355
[
    'num_inv' => 'E01058',
    'procesador_id' => 6, // Intel Celeron J3355
    'disco_duro_id' => 2,  // 500GB HDD
    'memoria_id' => 2,    // 4GB DDR3
],
[
    'num_inv' => 'E01059',
    'procesador_id' => 6,
    'disco_duro_id' => 2,
    'memoria_id' => 2,
],
[
    'num_inv' => 'E01060',
    'procesador_id' => 6,
    'disco_duro_id' => 3,  // 1TB HDD
    'memoria_id' => 2,
],
[
    'num_inv' => 'E01061',
    'procesador_id' => 6,
    'disco_duro_id' => 3,
    'memoria_id' => 2,
],
// HP ProDesk 600 G1 SFF con i3-4330
[
    'num_inv' => 'E02222',
    'procesador_id' => 11, // Intel Core i3 4th
    'disco_duro_id' => 2,  // 500GB HDD
    'memoria_id' => 2,    // 4GB DDR3
],
// Dell OptiPlex 3080 con i5-10500
[
    'num_inv' => 'E02248',
    'procesador_id' => 25, // Intel Core i5 10th
    'disco_duro_id' => 15, // 512GB SSD NVMe
    'memoria_id' => 10,    // 8GB DDR4 2666MHz
],

    ];

        foreach ($componentes as $componente) {
            $computadora = DatosComputadora::where('Num_inv', $componente['num_inv'])->first();
                
            if ($computadora) {
                ComponenteComputadora::create([
                    'computadora_id' => $computadora->id,
                    'procesador_id' => $componente['procesador_id'],
                    'disco_duro_id' => $componente['disco_duro_id'],
                    'memoria_id' => $componente['memoria_id']
                ]);
            }
        }

        $this->command->info('Componentes de 12 equipos creados exitosamente!');
    }
} 