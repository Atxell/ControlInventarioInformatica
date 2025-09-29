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
            // Equipo 00558.txt
            [
                'Num_inv' => '00558',
                'nombre' => 'H03D8B16',
                'tipo_equipo_id' => 2, // Desktop (HP ProDesk)
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '58:b1:62:c5:8b:16',
                'ip' => '172.16.9.30',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC20',
            ],
            // Equipo 1058.txt
            [
                'Num_inv' => '01058',
                'nombre' => 'L22B12CC',
                'tipo_equipo_id' => 1, // Laptop (Lenovo)
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 40, // ENSAMBLE (por defecto para F0CL000ALD)
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '96:2d:5a:b4:68:d0',
                'ip' => '192.168.1.202',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC02',
            ],
            // Equipo 01059.txt
            [
                'Num_inv' => '01059',
                'nombre' => 'L224B9F4',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 40, // ENSAMBLE
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => 'cf:9f:3f:7e:fc:f8',
                'ip' => '192.168.1.98',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC02',
            ],
            // Equipo 01060.txt
            [
                'Num_inv' => '01060',
                'nombre' => 'L125056C',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 40, // ENSAMBLE
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => 'c4:88:10:21:42:84',
                'ip' => '192.168.1.181',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC02',
            ],
            // Equipo 01061.txt
            [
                'Num_inv' => '01061',
                'nombre' => 'LFD9E059',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 40, // ENSAMBLE
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => '02:05:0b:16:2d:5a',
                'ip' => '192.168.1.111',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC02',
            ],
            // Equipo 01977.txt
            [
                'Num_inv' => '01977',
                'nombre' => 'DESKTOP-I1A8LR1',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop (Gigabyte no existe)
                'modelo_id' => 40, // ENSAMBLE
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => '8c:19:32:64:c9:92',
                'ip' => '172.16.13.52',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC05',
            ],
            // Equipo 01979.txt
            [
                'Num_inv' => '01979',
                'nombre' => 'H76B0736',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '39:73:e6:cd:9b:36',
                'ip' => '172.16.14.35',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC06',
            ],
            // Equipo 07890.txt
            [
                'Num_inv' => '07890',
                'nombre' => 'DBFD33C5',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 11, // VOSTRO 430
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '9e:3c:78:f1:e2:c5',
                'ip' => '172.16.7.50',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC25',
            ],
            // Equipo 07893.txt
            [
                'Num_inv' => '07893',
                'nombre' => 'DBFD358A_7893',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 11, // VOSTRO 430
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => 'ac:58:b1:62:c5:8a',
                'ip' => '172.16.13.30',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC11',
            ],
            // Equipo 07895.txt
            [
                'Num_inv' => '07895',
                'nombre' => 'DBFD51CE',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 11, // VOSTRO 430
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => '8e:1c:39:73:e7:ce',
                'ip' => '172.16.12.214',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC01',
            ],
            // Equipo 07902.txt
            [
                'Num_inv' => '07902',
                'nombre' => 'DBFD3229',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 11, // VOSTRO 430
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '91:22:45:8a:14:29',
                'ip' => '172.16.12.123',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC16',
            ],
            // Equipo 07903.txt
            [
                'Num_inv' => '07903',
                'nombre' => 'DBFD33C5_7903',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 11, // VOSTRO 430
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '96:2d:5b:b6:6d:db',
                'ip' => '172.16.9.12',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC25',
            ],
            // Equipo 07905.txt
            [
                'Num_inv' => '07905',
                'nombre' => 'DBFD5264',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 11, // VOSTRO 430
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => '93:26:4c:99:32:64',
                'ip' => '172.16.9.84',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC18',
            ],
            [
                'Num_inv' => '08493',
                'nombre' => 'AC6E7A00',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 5, // ACCER Desktop
                'modelo_id' => 41, // Aspire X1430 (nuevo)
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => 'd0:a0:40:80:00:00',
                'ip' => '127.0.0.1',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC02',
            ],
            // Equipos HP Compaq Pro 6305 MT
            [
                'Num_inv' => '08576',
                'nombre' => 'H09F5438',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => '7c:f8:f1:e3:c6:8c',
                'ip' => '172.16.37.13',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC26',
            ],
            [
                'Num_inv' => '08581',
                'nombre' => 'HB6E2EB1',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => '75:eb:d6:ac:58:b1',
                'ip' => '172.16.12.159',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC22',
            ],
            [
                'Num_inv' => '08584',
                'nombre' => 'H09F5E1D',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'f0:e1:c3:87:0e:1d',
                'ip' => '172.16.12.44',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC02',
            ],
            [
                'Num_inv' => '08592',
                'nombre' => 'H0946B3A',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '59:b3:67:ce:9d:3a',
                'ip' => '172.16.9.47',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC19',
            ],
            [
                'Num_inv' => '08594',
                'nombre' => 'H0A9097B',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '90:20:41:83:06:0d',
                'ip' => '172.16.12.19',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC18',
            ],
            [
                'Num_inv' => '08595',
                'nombre' => 'H09460DF',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '06:0d:1b:37:6f:df',
                'ip' => '172.16.12.157',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC22',
            ],
            [
                'Num_inv' => '08596',
                'nombre' => 'H09F5D1F8596',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => 'e8:d1:a3:47:8f:1f',
                'ip' => '172.16.6.215',
                'estado_id' => 1,
                'grupo_trabajo' => 'OPERACIONES',
            ],
            [
                'Num_inv' => '08599',
                'nombre' => 'HD3507CC',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 43, // HP COMPAQ PRO 6305 MICROTOWER
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '3e:7c:f9:f3:e6:cc',
                'ip' => '172.16.12.52',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC06',
            ],
            [
                'Num_inv' => '08614',
                'nombre' => 'H09F5E20',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'f1:e2:c4:88:10:20',
                'ip' => '172.16.12.53',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC06',
            ],
            [
                'Num_inv' => '08619',
                'nombre' => 'H09F5E2E',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'f1:e2:c5:8b:17:2e',
                'ip' => '172.16.12.59',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC07',
            ],
            // Equipo HP EliteDesk 705 G2 SFF (ya existe en modelos)
            [
                'Num_inv' => '08625',
                'nombre' => 'H76D8105',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '08:10:20:41:82:05',
                'ip' => '172.16.14.51',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC07',
            ],
            [
                'Num_inv' => '08628',
                'nombre' => 'H09F5438_2',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'a1:43:87:0e:1c:38',
                'ip' => '172.16.7.11',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC26',
            ],
            [
                'Num_inv' => '08644',
                'nombre' => 'H0946CC0',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => '66:cc:98:30:60:c0',
                'ip' => '172.16.11.11',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC24',
            ],
            [
                'Num_inv' => '08645',
                'nombre' => 'H0945E6F',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'f3:e6:cd:9b:37:6f',
                'ip' => '172.16.12.61',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC7',
            ],
            [
                'Num_inv' => '08646',
                'nombre' => 'H0946CC4',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => '66:cc:98:31:62:c4',
                'ip' => '172.16.12.132',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC17',
            ],
            [
                'Num_inv' => '08648',
                'nombre' => 'H0966E0D',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => '70:e0:c1:83:06:0d',
                'ip' => '172.16.12.238',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC04',
            ],
            [
                'Num_inv' => '08649',
                'nombre' => 'H09F5438_3',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => '70:e1:c2:85:0b:16',
                'ip' => '172.16.13.27',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC26',
            ],
            [
                'Num_inv' => '08651',
                'nombre' => 'H09F5D0F',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => 'e8:d0:a1:43:87:0f',
                'ip' => '172.16.12.69',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC09',
            ],
            [
                'Num_inv' => '08653',
                'nombre' => 'H09F5D0B',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => 'e8:d0:a1:42:85:0b',
                'ip' => '172.16.12.76',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC10',
            ],
            [
                'Num_inv' => '08654',
                'nombre' => 'H0966333',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4,
                'mac' => '19:33:66:cc:99:33',
                'ip' => '172.16.12.45',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC02',
            ],
            [
                'Num_inv' => '08655',
                'nombre' => 'H0966322',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => '19:32:64:c8:91:22',
                'ip' => '172.16.13.51',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC22',
            ],
            [
                'Num_inv' => '08656',
                'nombre' => 'H0966108',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => '08:10:21:42:84:08',
                'ip' => '172.16.12.139',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC15',
            ],
            [
                'Num_inv' => '08658',
                'nombre' => 'H09F5E15',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5,
                'mac' => 'f0:e1:c2:85:0a:15',
                'ip' => '172.16.12.215',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC01',
            ],
            [
                'Num_inv' => '08659',
                'nombre' => 'H094616E',
                'tipo_equipo_id' => 2,
                'marca_id' => 2,
                'modelo_id' => 42,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => '0b:16:2d:5b:b7:6e',
                'ip' => '172.16.12.27',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC03',
            ],
            // Equipos Lenovo 32643N2
            [
                'Num_inv' => '08745',
                'nombre' => 'L4586ACD',
                'tipo_equipo_id' => 1,
                'marca_id' => 8,
                'modelo_id' => 44,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => '56:ac:59:b3:66:cd',
                'ip' => '172.16.12.116',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC15',
            ],
            [
                'Num_inv' => '08746',
                'nombre' => 'L4586BA8',
                'tipo_equipo_id' => 1,
                'marca_id' => 8,
                'modelo_id' => 44,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => '5d:ba:75:ea:d4:a8',
                'ip' => '172.16.7.12',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC27',
            ],
            [
                'Num_inv' => '08748',
                'nombre' => 'L4587071',
                'tipo_equipo_id' => 1,
                'marca_id' => 8,
                'modelo_id' => 44,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4,
                'mac' => '83:07:0e:1c:38:71',
                'ip' => '172.16.12.35',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC04',
            ],
            [
                'Num_inv' => '08749',
                'nombre' => 'L45873F6',
                'tipo_equipo_id' => 1,
                'marca_id' => 8,
                'modelo_id' => 44,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => '9f:3f:7e:fd:fb:f6',
                'ip' => '172.16.12.134',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC17',
            ],
            [
                'Num_inv' => '08750',
                'nombre' => 'L4587076',
                'tipo_equipo_id' => 1,
                'marca_id' => 8,
                'modelo_id' => 44,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => '83:07:0e:1d:3b:76',
                'ip' => '172.16.13.45',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC02',
            ],
            // Equipo Gigabyte
            [
                'Num_inv' => '08763',
                'nombre' => 'E58D1F4E',
                'tipo_equipo_id' => 2,
                'marca_id' => 4,
                'modelo_id' => 45,
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2,
                'mac' => 'fa:f4:e9:d3:a7:4e',
                'ip' => '172.16.9.31',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC20',
            ],
            [
                'Num_inv' => '08766',
                'nombre' => 'L4586C5D',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 44, // 32643N2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '62:c5:8b:17:2e:5d',
                'ip' => '172.16.7.25',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC26',
            ],
            // Equipo 08768.txt
            [
                'Num_inv' => '08768',
                'nombre' => 'L4586B9B',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 44, // 32643N2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '5c:b9:73:e6:cd:9b',
                'ip' => '172.16.13.19',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC13',
            ],
            // Equipo 08775.txt
            [
                'Num_inv' => '08775',
                'nombre' => 'L4586C34',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 44, // 32643N2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '61:c3:86:0d:1a:34',
                'ip' => '172.16.12.216',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPCB01',
            ],
            // Equipo 08835.txt
            [
                'Num_inv' => '08835',
                'nombre' => 'D6CA75C5',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 6, // Dell Laptop (XPS es laptop)
                'modelo_id' => 2, // XPS
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => 'ae:5c:b8:71:e2:c5',
                'ip' => '192.168.1.112',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC03',
            ],
            // Equipo 08837.txt
            [
                'Num_inv' => '08837',
                'nombre' => 'DESKTOP-IK8LEAC',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 2, // XPS
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '01:02:05:0a:15:2b',
                'ip' => '172.16.6.214',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            // Equipo 08853.txt
            [
                'Num_inv' => '08853',
                'nombre' => 'HC789DEF',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'ef:de:bd:7b:f7:ef',
                'ip' => '172.16.12.203',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC24',
            ],
            // Equipo 08855.txt
            [
                'Num_inv' => '08855',
                'nombre' => 'HC795A12',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'd0:a1:42:84:09:12',
                'ip' => '172.16.12.147',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC20',
            ],
            // Equipo 08857.txt
            [
                'Num_inv' => '08857',
                'nombre' => 'HC8A40C4',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '06:0c:18:31:62:c4',
                'ip' => '172.16.37.59',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC03',
            ],
            // Equipo 08859.txt
            [
                'Num_inv' => '08859',
                'nombre' => 'HC780E9E',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '74:e9:d3:a7:4f:9e',
                'ip' => '172.16.6.193',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC03',
            ],
            // Equipo 08861.txt
            [
                'Num_inv' => '08861',
                'nombre' => 'HC780EB8',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '75:eb:d7:ae:5c:b8',
                'ip' => '169.254.130.184',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC02',
            ],
            // Equipo 08863.txt
            [
                'Num_inv' => '08863',
                'nombre' => 'HC795A25',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'd1:a2:44:89:12:25',
                'ip' => '172.16.12.67',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC08',
            ],
            // Equipo 08869.txt
            [
                'Num_inv' => '08869',
                'nombre' => 'HC780D34',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '69:d3:a6:4d:9a:34',
                'ip' => '172.16.12.195',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC14',
            ],
            // Equipo 08871.txt
            [
                'Num_inv' => '08871',
                'nombre' => 'HC789C8A',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => 'e4:c8:91:22:45:8a',
                'ip' => '172.16.12.12',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC01',
            ],
            // Equipo 08875.txt
            [
                'Num_inv' => '08875',
                'nombre' => 'HC8A40C2',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '06:0c:18:30:61:c2',
                'ip' => '172.16.9.85',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC18',
            ],
            // Equipo 08876.txt
            [
                'Num_inv' => '08876',
                'nombre' => 'HC789C88',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'e4:c8:91:22:44:88',
                'ip' => '172.16.12.191',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC22',
            ],
            // Equipo 09114.txt
            [
                'Num_inv' => '09114',
                'nombre' => 'H76D82A8',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'ba:75:ea:d4:a9:53',
                'ip' => '172.16.14.60',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC21',
            ],
            // Equipo 09121.txt
            [
                'Num_inv' => '09121',
                'nombre' => 'H0478E19',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '70:e1:c3:86:0c:19',
                'ip' => '172.16.11.10',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC24',
            ],
            // Equipo 09126.txt
            [
                'Num_inv' => '09126',
                'nombre' => 'H03FB826',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'c1:82:04:09:13:26',
                'ip' => '172.16.12.91',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC12',
            ],
            // Equipo 09134.txt
            [
                'Num_inv' => '09134',
                'nombre' => 'H04902B7',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '1c:39:73:e7:cf:9f',
                'ip' => '172.16.37.12',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC14',
            ],
            // Equipo 09136.txt
            [
                'Num_inv' => '09136',
                'nombre' => 'DESKTOP-9SUQJEN',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '57:ae:5d:bb:76:ec',
                'ip' => '172.16.12.93',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            // Equipo 09142.txt
            [
                'Num_inv' => '09142',
                'nombre' => 'H12804A8',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '25:4a:95:2a:54:a8',
                'ip' => '172.16.12.141',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC26',
            ],
            // Equipo 09143.txt
            [
                'Num_inv' => '09143',
                'nombre' => 'H1190274',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '13:27:4e:9d:3a:74',
                'ip' => '172.16.13.43',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC02',
            ],
            // Equipo 09373.txt
            [
                'Num_inv' => '09373',
                'nombre' => 'D47873EF',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 5, // INSPIRION 3646
                'sistema_operativo_id' => 1, // Windows 8.1
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '9f:3f:7e:fc:f8:f0',
                'ip' => '172.16.13.29',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC13',
            ],
            // Equipo 09539.txt
            [
                'Num_inv' => '09539',
                'nombre' => 'H0478DA4',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '6d:da:b4:69:d2:a4',
                'ip' => '172.16.9.29',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC20',
            ],
            // Equipo 09550.txt
            [
                'Num_inv' => '09550',
                'nombre' => 'H043E393',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 28, // PRODESK 600 G1
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '1c:39:72:e4:c9:93',
                'ip' => '172.16.12.117',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC16',
            ],
            // Equipo 09876.txt
            [
                'Num_inv' => '09876',
                'nombre' => 'DE7BB78E',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 5, // INSPIRION 3646
                'sistema_operativo_id' => 1, // Windows 8.1
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '8e:1c:38:70:e0:c0',
                'ip' => '172.17.228.127',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC03',
            ],
            // Equipo 09878.txt
            [
                'Num_inv' => '09878',
                'nombre' => 'DE7B6C3A',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 5, // INSPIRION 3646
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '61:c3:87:0e:1d:3a',
                'ip' => '172.16.12.75',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC11',
            ],
            // Equipo 09881.txt
            [
                'Num_inv' => '09881',
                'nombre' => 'dE7BB3F4',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 5, // INSPIRION 3646
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '9f:3f:7e:fd:fa:f4',
                'ip' => '172.16.12.55',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC07',
            ],
            // Equipo 09929.txt
            [
                'Num_inv' => '09929',
                'nombre' => 'H91BEC89',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 29, // PRODESK 405 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '64:c8:91:22:44:89',
                'ip' => '172.16.9.66',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC19',
            ],
            // Equipo 09935.txt
            [
                'Num_inv' => '09935',
                'nombre' => 'H91BEC71',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 29, // PRODESK 405 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '65:cb:97:2e:5c:b9',
                'ip' => '169.254.4.56',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC23',
            ],
            // Equipo 09937.txt
            [
                'Num_inv' => '09937',
                'nombre' => 'H756D17D',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 800 G1 (aproximación para EliteDesk 705 G1)
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '8b:17:2f:5f:be:7d',
                'ip' => '172.16.14.27',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC06',
            ],
            // Equipo 10040.txt
            [
                'Num_inv' => '10040',
                'nombre' => 'DE7C0382',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 5, // INSPIRION 3646
                'sistema_operativo_id' => 1, // Windows 8.1
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '6f:df:bf:7e:fc:f8',
                'ip' => '172.17.125.251',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC06',
            ],
            // Equipo 10064.txt
            [
                'Num_inv' => '10064',
                'nombre' => 'H76E11FA',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '8f:1f:3f:7e:fd:fa',
                'ip' => '172.16.13.20',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC14',
            ],
            // Equipo 10070.txt
            [
                'Num_inv' => '10070',
                'nombre' => 'H04902B7_2',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '5b:b7:6e:dc:b9:73',
                'ip' => '172.16.12.161',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC14',
            ],
            // Equipo 10074.txt
            [
                'Num_inv' => '10074',
                'nombre' => 'H76C40D3',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '06:0d:1a:34:69:d3',
                'ip' => '172.16.14.29',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC08',
            ],
            // Equipo 10076.txt
            [
                'Num_inv' => '10076',
                'nombre' => 'H76B0BE6',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '5f:be:7c:f9:f3:e6',
                'ip' => '172.16.12.133',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC06',
            ],
            // Equipo 10079.txt
            [
                'Num_inv' => '10079',
                'nombre' => 'H76B0BFF',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '5f:bf:7f:ff:ff:ff',
                'ip' => '172.16.12.84',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC11',
            ],
            // Equipo 10081.txt
            [
                'Num_inv' => '10081',
                'nombre' => 'H76B0B44',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '5a:b4:68:d1:a2:44',
                'ip' => '172.16.13.46',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC16',
            ],
            // Equipo 10088.txt
            [
                'Num_inv' => '10088',
                'nombre' => 'H76D9FF8',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => 'ff:ff:ff:fe:fc:f8',
                'ip' => '172.16.11.51',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC24',
            ],
            // Equipo 10095.txt
            [
                'Num_inv' => '10095',
                'nombre' => 'H76D7C8E',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'e4:c8:91:23:47:8e',
                'ip' => '172.16.12.51',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC06',
            ],
            // Equipo 10104.txt
            [
                'Num_inv' => '10104',
                'nombre' => 'H76D7BA7',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'dd:ba:74:e9:d3:a7',
                'ip' => '172.16.12.223',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC03',
            ],
            // Equipo 10105.txt
            [
                'Num_inv' => '10105',
                'nombre' => 'H76D7AA5',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => 'd5:aa:54:a9:52:a5',
                'ip' => '172.16.12.171',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC23',
            ],
            // Equipo 10133.txt
            [
                'Num_inv' => '10133',
                'nombre' => 'H76B0C05',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 35, // ELITEDESK 705 G2
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 2, // Office 2016
                'mac' => '60:c0:80:01:02:05',
                'ip' => '172.16.9.11',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC21',
            ],
            // Equipo 10392.txt
            [
                'Num_inv' => '10392',
                'nombre' => 'DESKTOP-K44S68A',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 6, // Dell Laptop
                'modelo_id' => 4, // LATITUDE 5480
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '77:ef:df:bf:7e:fc',
                'ip' => '192.168.1.93',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            // Equipo 10413.txt
            [
                'Num_inv' => '10413',
                'nombre' => 'DESKTOP-2B2I80C',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 6, // Dell Laptop
                'modelo_id' => 4, // LATITUDE 5480
                'sistema_operativo_id' => 4,
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => 'd3:a6:4c:99:32:64',
                'ip' => '172.17.177.0',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],// Equipo 10416.txt - Dell Latitude 5480
            [
                'Num_inv' => '10416',
                'nombre' => 'DESKTOP-K44S68A_3',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 6, // Dell Laptop
                'modelo_id' => 4, // LATITUDE 5480
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => 'e4:c8:91:22:44:89',
                'ip' => '172.20.138.140',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            // Equipo 10419.txt - Dell Latitude 5480
            [
                'Num_inv' => '10419',
                'nombre' => 'DESKTOP-K44S68A_2',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 6, // Dell Laptop
                'modelo_id' => 4, // LATITUDE 5480
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '0c:19:32:65:ca:95',
                'ip' => '192.168.1.214',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            // Equipo 10435.txt - Dell Precision Tower 3620
            [
                'Num_inv' => '10435',
                'nombre' => 'REDES-A1',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 19, // PRECISION TOWER 3620
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '37:6e:dd:ba:75:ea',
                'ip' => '192.168.56.1',
                'estado_id' => 1,
                'grupo_trabajo' => 'REDES',
            ],
            // Equipo 10457.txt - Dell OptiPlex 3050
            [
                'Num_inv' => '10457',
                'nombre' => 'DC55B7B2',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 23, // OPTIPLEX 3050
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365 (versión 16.0)
                'mac' => 'bd:7b:f6:ec:d9:b2',
                'ip' => '172.16.7.51',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC25',
            ],

            // Nuevos equipos Dell OptiPlex 3050
            [
                'Num_inv' => '10458',
                'nombre' => 'DESKTOP-UCJPJLV',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 23, // OPTIPLEX 3050
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '8f:1e:3d:7b:f7:ee',
                'ip' => '172.16.15.13',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            [
                'Num_inv' => '10459',
                'nombre' => 'DESKTOP-C4F375H',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 23, // OPTIPLEX 3050
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '8d:1b:36:6c:d9:b2',
                'ip' => '172.16.9.32',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            [
                'Num_inv' => '10464',
                'nombre' => 'DC55E2D6',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 23, // OPTIPLEX 3050
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '4f:9e:3d:7b:f6:ec',
                'ip' => '172.16.9.65',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC19',
            ],
            [
                'Num_inv' => '10465',
                'nombre' => 'DC55B3DF',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 23, // OPTIPLEX 3050
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => 'e6:cd:9a:35:6a:d5',
                'ip' => '172.16.12.36',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC05',
            ],
            [
                'Num_inv' => '10466',
                'nombre' => 'DBB591CC',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 23, // OPTIPLEX 3050
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '8e:1d:3a:74:e8:d0',
                'ip' => '172.16.9.83',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC17',
            ],
            [
                'Num_inv' => '10470',
                'nombre' => 'DC55E4A1',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 23, // OPTIPLEX 3050
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '86:0c:19:32:64:c1',
                'ip' => '172.16.9.48',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC19',
            ],
            [
                'Num_inv' => '10647',
                'nombre' => 'DC55E563',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 23, // OPTIPLEX 3050
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '2b:56:ac:58:b1:63',
                'ip' => '172.16.7.52',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC26',
            ],

            // Equipos Dell Vostro 3471
            [
                'Num_inv' => '11106',
                'nombre' => 'D8BA4219',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 16, // VOSTRO 3471
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '10:21:43:86:0c:19',
                'ip' => '172.16.12.125',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC17',
            ],
            [
                'Num_inv' => '11108',
                'nombre' => 'D8D68826',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 16, // VOSTRO 3471
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => 'ba:74:e8:d0:a0:40',
                'ip' => '172.16.12.39',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            [
                'Num_inv' => '11109',
                'nombre' => 'D8B9C668',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 16, // VOSTRO 3471
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => 'cc:99:32:64:c8:90',
                'ip' => '172.16.14.62',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC06',
            ],

            // Equipos Dell Vostro 3490 (Laptops)
            [
                'Num_inv' => '11121',
                'nombre' => 'DESKTOP-OHMA9OJ',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 6, // Dell Laptop
                'modelo_id' => 15, // VOSTRO 3490
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => 'dd:bb:77:ef:de:bc',
                'ip' => '172.17.184.94',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            [
                'Num_inv' => '11124',
                'nombre' => 'DESKTOP-41KLRER',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 6, // Dell Laptop
                'modelo_id' => 15, // VOSTRO 3490
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '27:4e:9c:39:73:e7',
                'ip' => '172.17.126.218',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],

            // Equipos HP 200 G3 AiO
            [
                'Num_inv' => '11114',
                'nombre' => 'h15321DA',
                'tipo_equipo_id' => 2, // Desktop (All-in-One)
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 40, // 200 G3 ALL IN ONE
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '4c:99:33:67:ce:9d',
                'ip' => '172.16.22.38',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC03',
            ],
            [
                'Num_inv' => '11135',
                'nombre' => 'h153FF4C',
                'tipo_equipo_id' => 2, // Desktop (All-in-One)
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 40, // 200 G3 ALL IN ONE
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '0e:1d:3a:74:e9:d3',
                'ip' => '172.16.22.51',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC03',
            ],
            [
                'Num_inv' => '11140',
                'nombre' => 'h153259D',
                'tipo_equipo_id' => 2, // Desktop (All-in-One)
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 40, // 200 G3 ALL IN ONE
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '0c:19:32:64:c9:92',
                'ip' => '172.16.22.54',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC03',
            ],
            // Nuevos equipos HP 200 G3 AiO
            [
                'Num_inv' => '11142',
                'nombre' => 'h1540184',
                'tipo_equipo_id' => 2, // Desktop (All-in-One)
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 40, // 200 G3 ALL IN ONE
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '0c:18:30:61:c2:84',
                'ip' => '172.16.22.21',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC03',
            ],
            [
                'Num_inv' => '11143',
                'nombre' => 'h1540183',
                'tipo_equipo_id' => 2, // Desktop (All-in-One)
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 40, // 200 G3 ALL IN ONE
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '0c:18:30:60:c1:83',
                'ip' => '172.16.22.56',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC03',
            ],
            [
                'Num_inv' => '11144',
                'nombre' => 'h1532826',
                'tipo_equipo_id' => 2, // Desktop (All-in-One)
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 40, // 200 G3 ALL IN ONE
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '56:ad:5a:b4:68:d1',
                'ip' => '172.16.22.57',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC03',
            ],

            // Nuevos equipos Dell OptiPlex 3080
            [
                'Num_inv' => '11185',
                'nombre' => 'DESKTOP-C4F375H_2',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 22, // OPTIPLEX 3080
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '38:70:e0:c1:82:05',
                'ip' => '172.16.6.206',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            [
                'Num_inv' => '11191',
                'nombre' => 'DDB8581F',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 22, // OPTIPLEX 3080
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => 'c0:81:03:07:0f:1f',
                'ip' => '172.16.12.13',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC01',
            ],

            // Nuevos equipos Dell Vostro 3710
            [
                'Num_inv' => '11327',
                'nombre' => 'D5014C0D',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 14, // VOSTRO 3710
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '66:cc:98:30:60:c1',
                'ip' => '172.16.6.234',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            [
                'Num_inv' => '11330',
                'nombre' => 'D50297B2',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 14, // VOSTRO 3710
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '6b:d6:ac:59:b3:66',
                'ip' => '172.16.12.47',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC25',
            ],
            [
                'Num_inv' => '11339',
                'nombre' => 'D50296E5',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 14, // VOSTRO 3710
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => 'fb:f7:ef:de:bd:7a',
                'ip' => '172.16.12.38',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],

            // Nuevos equipos HP 280 G5 SFF
            [
                'Num_inv' => '11351',
                'nombre' => 'DESKTOP-QS7V5S2',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '29:52:a5:4b:97:2e',
                'ip' => '172.16.12.77',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            [
                'Num_inv' => '11353',
                'nombre' => 'HA317D7B',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '29:53:a6:4c:98:30',
                'ip' => '172.16.12.200',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC25',
            ],
            [
                'Num_inv' => '11358',
                'nombre' => 'H387B30C',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '42:85:0b:17:2f:5e',
                'ip' => '172.17.68.54',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC03',
            ],
            [
                'Num_inv' => '11359',
                'nombre' => 'HA31847B',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '23:47:8f:1e:3d:7b',
                'ip' => '172.16.12.202',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC25',
            ],
            [
                'Num_inv' => '11363',
                'nombre' => 'HA318137',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna
                'mac' => '03:07:0e:1c:38:70',
                'ip' => '172.16.14.43',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC10',
            ],

            // Equipo 11364 - HP 280 G5 SFF
            [
                'Num_inv' => '11364',
                'nombre' => 'HA317EB8',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '41:83:06:0c:18:30',
                'ip' => '192.168.1.117',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPBC09',
            ],
            // Equipo 11369 - HP 280 G5 SFF
            [
                'Num_inv' => '11369',
                'nombre' => 'HA317EBC',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '08:11:22:44:89:12',
                'ip' => '172.16.12.99',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC14',
            ],
            // Equipo 11373 - HP 280 G5 SFF
            [
                'Num_inv' => '11373',
                'nombre' => 'HA317E62',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => 'fe:fd:fa:f4:e8:d0',
                'ip' => '172.16.12.11',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC01',
            ],
            // Equipo 11646 - LENOVO Laptop
            [
                'Num_inv' => '11646',
                'nombre' => 'L86B719D',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 40, // ENSAMBLE
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '53:a6:4c:98:30:60',
                'ip' => '172.16.22.23',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC03',
            ],
            // Equipo 11647 - LENOVO Laptop
            [
                'Num_inv' => '11647',
                'nombre' => 'L86B6DFC',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 40, // ENSAMBLE
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '6f:df:bf:7f:fe:fc',
                'ip' => '172.16.37.77',
                'estado_id' => 1,
                'grupo_trabajo' => 'ECPAC02',
            ],
            // Equipo 11661 - LENOVO Laptop
            [
                'Num_inv' => '11661',
                'nombre' => 'L86B6495',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 40, // ENSAMBLE
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => 'cc:99:32:65:ca:95',
                'ip' => '172.16.11.50',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPBC23',
            ],
            // Equipo 11664 - LENOVO Laptop
            [
                'Num_inv' => '11664',
                'nombre' => 'L86B6DBD',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 8, // Lenovo Laptop
                'modelo_id' => 40, // ENSAMBLE
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '73:e7:ce:9c:39:73',
                'ip' => '172.16.12.155',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC21',
            ],
            // Equipo 11666 - HP 280 G5 SFF
            [
                'Num_inv' => '11666',
                'nombre' => 'H8C9B96B',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => 'cb:96:2d:5a:b5:6b',
                'ip' => '172.17.26.85',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC08',
            ],
            // Equipo 11667 - HP 280 G5 SFF
            [
                'Num_inv' => '11667',
                'nombre' => 'DESKTOP-GLMS6UI',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '86:0c:19:32:64:c8',
                'ip' => '172.16.6.212',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            // Equipo 11674 - HP 280 G5 SFF
            [
                'Num_inv' => '11674',
                'nombre' => 'DESKTOP-4SJVH20',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '86:0c:18:30:61:c3',
                'ip' => '172.17.120.14',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC22',
            ],
            // Equipo 11681 - HP 280 G5 SFF
            [
                'Num_inv' => '11681',
                'nombre' => 'H8C97FCF',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '5c:b9:73:e6:cc:98',
                'ip' => '172.16.12.37',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPAC09',
            ],
            // Equipo 11682 - HP 280 G5 SFF
            [
                'Num_inv' => '11682',
                'nombre' => 'D8C9A01A',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '14:28:51:a3:47:8e',
                'ip' => '172.16.13.47',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC02',
            ],
            // Equipo 11683 - HP 280 G5 SFF
            [
                'Num_inv' => '11683',
                'nombre' => 'H8C999A3',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 37, // 280 G5 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => 'e2:c5:8a:14:28:51',
                'ip' => '172.16.15.12',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC',
            ],
            // Equipo 90980 - HP Compaq Pro 6305 MT
            [
                'Num_inv' => '90980',
                'nombre' => 'H09F5E29',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '19:33:67:ce:9c:38',
                'ip' => '172.16.12.239',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC06',
            ],
            // Equipo E01951 - Gigabyte Desktop
            [
                'Num_inv' => 'E01951',
                'nombre' => 'GC13EBD9',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 4, // LANIX (Gigabyte)
                'modelo_id' => 45, // To be filled by O.E.M.
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '5e:bd:7b:f6:ec:d9',
                'ip' => '172.16.14.59',
                'estado_id' => 1,
                'grupo_trabajo' => 'EDPBC06',
            ],
            // Agregar después del último equipo existente en el array $computadoras

            // Equipo 01110 - Dell Vostro 3471
            [
                'Num_inv' => '01110',
                'nombre' => 'D8B9C8C6',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 1, // Dell Desktop
                'modelo_id' => 16, // VOSTRO 3471
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '0b:16:2c:59:b2:64',
                'ip' => '172.16.24.68',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPBC04',
            ],
            // Equipo 06789 - ASUS Laptop (necesita nuevo modelo)
            [
                'Num_inv' => '06789',
                'nombre' => 'Tokallito',
                'tipo_equipo_id' => 1, // Laptop
                'marca_id' => 9, // ACER (aproximación para ASUS)
                'modelo_id' => 40, // ENSAMBLE
                'sistema_operativo_id' => 5, // Windows 11
                'licenciaoriginal' => true,
                'version_office_id' => 4, // Office365
                'mac' => '3f:7f:fe:fc:f9:f3',
                'ip' => '172.17.100.197',
                'estado_id' => 1,
                'grupo_trabajo' => 'WORKGROUP',
            ],
            // Equipo 08575 - HP Compaq Pro 6305 MT
            [
                'Num_inv' => '08575',
                'nombre' => 'H09F543D',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => 'a1:43:87:0f:1e:3d',
                'ip' => '172.16.60.104',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC21',
            ],
            // Equipo 08580 - HP Compaq Pro 6305 MT
            [
                'Num_inv' => '08580',
                'nombre' => 'H09F5C9C',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => 'e4:c9:93:27:4e:9c',
                'ip' => '172.16.20.10',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPBC05',
            ],
            // Equipo 08583 - HP Compaq Pro 6305 MT
            [
                'Num_inv' => '08583',
                'nombre' => 'H0966DF2',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '6f:df:be:7c:f9:f2',
                'ip' => '172.16.24.50',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPBC04',
            ],
            // Equipo 08585 - HP Compaq Pro 6305 MT
            [
                'Num_inv' => '08585',
                'nombre' => 'H0946BC3',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '5e:bc:78:f0:e1:c3',
                'ip' => '172.16.52.101',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC29',
            ],
            // Equipo 08588 - HP Compaq Pro 6305 MT
            [
                'Num_inv' => '08588',
                'nombre' => 'H0946CB7',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // No tiene Office
                'mac' => '65:cb:96:2d:5b:b7',
                'ip' => '172.16.52.73',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC29',
            ],
            [
        'Num_inv' => '08590',
        'nombre' => 'DESKTOP-UONQUU9',
        'tipo_equipo_id' => 2, // Desktop
        'marca_id' => 2, // HP Desktop
        'modelo_id' => 42, // HP Compaq Pro 6305 MT
        'sistema_operativo_id' => 4, // Windows 10
        'licenciaoriginal' => true,
        'version_office_id' => 5, // Ninguna (por defecto)
        'mac' => 'ec:d9:b3:66:cd:9a',
        'ip' => '172.16.30.67',
        'estado_id' => 2, // Asignado
        'grupo_trabajo' => 'AREA_OPERATIVA',
    ],
    // Equipo 08593
    [
        'Num_inv' => '08593',
        'nombre' => 'H0966DFB',
        'tipo_equipo_id' => 2, // Desktop
        'marca_id' => 2, // HP Desktop
        'modelo_id' => 42, // HP Compaq Pro 6305 MT
        'sistema_operativo_id' => 4, // Windows 10
        'licenciaoriginal' => true,
        'version_office_id' => 5, // Ninguna (por defecto)
        'mac' => 'f1:e2:c5:8b:16:2c',
        'ip' => '172.16.60.133',
        'estado_id' => 2, // Asignado
        'grupo_trabajo' => 'EAPAC20',
    ],
    // Equipo 08598
    [
        'Num_inv' => '08598',
        'nombre' => 'H0946CC9',
        'tipo_equipo_id' => 2, // Desktop
        'marca_id' => 2, // HP Desktop
        'modelo_id' => 42, // HP Compaq Pro 6305 MT
        'sistema_operativo_id' => 4, // Windows 10
        'licenciaoriginal' => true,
        'version_office_id' => 5, // Ninguna (por defecto)
        'mac' => '66:cc:99:32:64:c9',
        'ip' => '172.16.21.58',
        'estado_id' => 2, // Asignado
        'grupo_trabajo' => 'EBPAC05',
    ],
    // Equipo 08600
    [
        'Num_inv' => '08600',
        'nombre' => 'H09F5C30',
        'tipo_equipo_id' => 2, // Desktop
        'marca_id' => 2, // HP Desktop
        'modelo_id' => 42, // HP Compaq Pro 6305 MT
        'sistema_operativo_id' => 4, // Windows 10
        'licenciaoriginal' => true,
        'version_office_id' => 5, // Ninguna (por defecto)
        'mac' => 'e1:c3:86:0c:18:30',
        'ip' => '172.16.29.68',
        'estado_id' => 2, // Asignado
        'grupo_trabajo' => 'ECPSC05',
    ],
    // Equipo 08602 (Se ignora 8602.txt por duplicidad de datos)
    [
        'Num_inv' => '08602',
        'nombre' => 'H09F5438',
        'tipo_equipo_id' => 2, // Desktop
        'marca_id' => 2, // HP Desktop
        'modelo_id' => 42, // HP Compaq Pro 6305 MT
        'sistema_operativo_id' => 4, // Windows 10
        'licenciaoriginal' => true,
        'version_office_id' => 5, // Ninguna (por defecto)
        'mac' => '66:cc:98:31:63:c6',
        'ip' => '172.16.30.8',
        'estado_id' => 2, // Asignado
        'grupo_trabajo' => 'EAPAC14',
    ],
    // Equipo 08603
    [
        'Num_inv' => '08603',
        'nombre' => 'H0946CB1',
        'tipo_equipo_id' => 2, // Desktop
        'marca_id' => 2, // HP Desktop
        'modelo_id' => 42, // HP Compaq Pro 6305 MT
        'sistema_operativo_id' => 4, // Windows 10
        'licenciaoriginal' => true,
        'version_office_id' => 5, // Ninguna (por defecto)
        'mac' => '65:cb:96:2c:58:b1',
        'ip' => '172.16.32.43',
        'estado_id' => 2, // Asignado
        'grupo_trabajo' => 'EAPAC24',
    ],
    // Equipo 08604
    [
        'Num_inv' => '08604',
        'nombre' => 'H0946CC2',
        'tipo_equipo_id' => 2, // Desktop
        'marca_id' => 2, // HP Desktop
        'modelo_id' => 42, // HP Compaq Pro 6305 MT
        'sistema_operativo_id' => 4, // Windows 10
        'licenciaoriginal' => true,
        'version_office_id' => 5, // Ninguna (por defecto)
        'mac' => '66:cc:98:30:61:c2',
        'ip' => '172.16.31.46',
        'estado_id' => 2, // Asignado
        'grupo_trabajo' => 'EAPAC18',
    ],
    // Equipo 08605
    [
        'Num_inv' => '08605',
        'nombre' => 'H0946CC3',
        'tipo_equipo_id' => 2, // Desktop
        'marca_id' => 2, // HP Desktop
        'modelo_id' => 42, // HP Compaq Pro 6305 MT
        'sistema_operativo_id' => 4, // Windows 10
        'licenciaoriginal' => true,
        'version_office_id' => 5, // Ninguna (por defecto)
        'mac' => '66:cc:98:30:61:c3',
        'ip' => '172.16.18.21',
        'estado_id' => 2, // Asignado
        'grupo_trabajo' => 'ECPSC02',
    ],
    // Equipo 08618
    [
        'Num_inv' => '08618',
        'nombre' => 'H0966E0C',
        'tipo_equipo_id' => 2, // Desktop
        'marca_id' => 2, // HP Desktop
        'modelo_id' => 42, // HP Compaq Pro 6305 MT
        'sistema_operativo_id' => 4, // Windows 10
        'licenciaoriginal' => true,
        'version_office_id' => 5, // Ninguna (por defecto)
        'mac' => '70:e0:c1:83:06:0c',
        'ip' => '172.16.21.76',
        'estado_id' => 2, // Asignado
        'grupo_trabajo' => 'EAPAC12',
    ],
    // Equipo 08618.txt
            [
                'Num_inv' => '08618',
                'nombre' => 'H0966E0C',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => '70:e0:c1:83:06:0c',
                'ip' => '172.16.21.76',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC12',
            ],
            // Equipo 08623.txt
            [
                'Num_inv' => '08623',
                'nombre' => 'H0946CB8',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => '65:cb:97:2e:5c:b8',
                'ip' => '172.16.25.24',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC15',
            ],
            // Equipo 08626.txt
            [
                'Num_inv' => '08626',
                'nombre' => 'H0966AC4',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => '56:ac:58:b1:62:c4',
                'ip' => '172.16.20.49',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPBC07',
            ],
            // Equipo 08632.txt
            [
                'Num_inv' => '08632',
                'nombre' => 'H0966D88',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => '6c:d8:b1:62:c4:88',
                'ip' => '127.0.0.1',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC12',
            ],
            // Equipo 08633.txt
            [
                'Num_inv' => '08633',
                'nombre' => 'H096633B',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => '19:33:67:ce:9d:3b',
                'ip' => '172.16.21.85',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC09',
            ],
            // Equipo 08634.txt
            [
                'Num_inv' => '08634',
                'nombre' => 'H09F5E07',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => 'f0:e0:c0:81:03:07',
                'ip' => '172.16.21.78',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC11',
            ],
            // Equipo 08636.txt
            [
                'Num_inv' => '08636',
                'nombre' => 'H0945E69',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => 'f3:e6:cd:9a:34:69',
                'ip' => '172.16.30.15',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC14',
            ],
            // Equipo 08637.txt
            [
                'Num_inv' => '08637',
                'nombre' => 'H04902B7',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 31, // HP ProDesk 600 G1 SFF
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => '41:83:06:0c:18:30',
                'ip' => '172.16.34.6',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPAC23',
            ],
            // Equipo 08640.txt
            [
                'Num_inv' => '08640',
                'nombre' => 'H0965F52',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => 'fa:f5:ea:d4:a9:52',
                'ip' => '127.0.0.1',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPBC06',
            ],
            // Equipo 08643.txt
            [
                'Num_inv' => '08643',
                'nombre' => 'H0946AC1',
                'tipo_equipo_id' => 2, // Desktop
                'marca_id' => 2, // HP Desktop
                'modelo_id' => 42, // HP Compaq Pro 6305 MT
                'sistema_operativo_id' => 4, // Windows 10
                'licenciaoriginal' => true,
                'version_office_id' => 5, // Ninguna (por defecto)
                'mac' => '56:ac:58:b0:60:c1',
                'ip' => '172.16.12.164',
                'estado_id' => 1,
                'grupo_trabajo' => 'EAPBC09',
            ],
            [
    'Num_inv' => '08656',
    'nombre' => 'H0966108',
    'tipo_equipo_id' => 2, // Desktop
    'marca_id' => 2, // HP Desktop
    'modelo_id' => 42, // HP Compaq Pro 6305 MT
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 5, // Ninguna
    'mac' => '08:10:21:42:84:08',
    'ip' => '172.16.12.139',
    'estado_id' => 1,
    'grupo_trabajo' => 'EAPAC27',
],

// Equipo 08661 - HP Compaq Pro 6305 MT
[
    'Num_inv' => '08661',
    'nombre' => 'H0946C1B',
    'tipo_equipo_id' => 2, // Desktop
    'marca_id' => 2, // HP Desktop
    'modelo_id' => 42, // HP Compaq Pro 6305 MT
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 5, // Ninguna
    'mac' => '60:c1:83:06:0d:1b',
    'ip' => '172.16.21.75',
    'estado_id' => 1,
    'grupo_trabajo' => 'EBPAC05',
],

// Equipo 08662 - HP Compaq Pro 6305 MT
[
    'Num_inv' => '08662',
    'nombre' => 'H09F5E17',
    'tipo_equipo_id' => 2, // Desktop
    'marca_id' => 2, // HP Desktop
    'modelo_id' => 42, // HP Compaq Pro 6305 MT
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 5, // Ninguna
    'mac' => 'f0:e1:c2:85:0b:17',
    'ip' => '172.16.29.39',
    'estado_id' => 1,
    'grupo_trabajo' => 'EAPAC13',
],

// Equipo 08664 - HP Compaq Pro 6305 MT
[
    'Num_inv' => '08664',
    'nombre' => 'H0966E05',
    'tipo_equipo_id' => 2, // Desktop
    'marca_id' => 2, // HP Desktop
    'modelo_id' => 42, // HP Compaq Pro 6305 MT
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 4, // Office365 (Office ProplusRetail)
    'mac' => '70:e0:c0:81:02:05',
    'ip' => '172.16.12.108',
    'estado_id' => 1,
    'grupo_trabajo' => 'EBPAC06',
],

// Equipo 08666 - HP Compaq Pro 6305 MT
[
    'Num_inv' => '08666',
    'nombre' => 'H09F5438',
    'tipo_equipo_id' => 2, // Desktop
    'marca_id' => 2, // HP Desktop
    'modelo_id' => 42, // HP Compaq Pro 6305 MT
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 5, // Ninguna
    'mac' => '34:69:d3:a6:4d:9b',
    'ip' => '172.16.21.56',
    'estado_id' => 1,
    'grupo_trabajo' => 'EDPBC26',
],

// Equipo 08667 - Dell Vostro 3471
[
    'Num_inv' => '08667',
    'nombre' => 'D8D68110',
    'tipo_equipo_id' => 2, // Desktop
    'marca_id' => 1, // Dell Desktop
    'modelo_id' => 16, // VOSTRO 3471
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 5, // Ninguna
    'mac' => 'f2:e4:c8:91:22:45',
    'ip' => '172.16.30.66',
    'estado_id' => 1,
    'grupo_trabajo' => 'ECPSC03',
],

// Equipo 08668 - HP Compaq Pro 6305 MT
[
    'Num_inv' => '08668',
    'nombre' => 'H0946C6B',
    'tipo_equipo_id' => 2, // Desktop
    'marca_id' => 2, // HP Desktop
    'modelo_id' => 42, // HP Compaq Pro 6305 MT
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 5, // Ninguna
    'mac' => '63:c6:8d:1a:35:6b',
    'ip' => '172.16.16.12',
    'estado_id' => 1,
    'grupo_trabajo' => 'EAPBC16',
],

// Equipo 08764 - Lenovo 32643N2
[
    'Num_inv' => '08764',
    'nombre' => 'L458751C',
    'tipo_equipo_id' => 1, // Laptop
    'marca_id' => 8, // Lenovo Laptop
    'modelo_id' => 44, // 32643N2
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 4, // Office365
    'mac' => 'a8:51:a3:47:8e:1c',
    'ip' => '172.16.14.19',
    'estado_id' => 1,
    'grupo_trabajo' => 'EAPAC28',
],

// Equipo 08770 - Lenovo 32643N2
[
    'Num_inv' => '08770',
    'nombre' => 'L4586AAD',
    'tipo_equipo_id' => 1, // Laptop
    'marca_id' => 8, // Lenovo Laptop
    'modelo_id' => 44, // 32643N2
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 5, // Ninguna
    'mac' => '55:aa:55:ab:56:ad',
    'ip' => '172.16.21.81',
    'estado_id' => 1,
    'grupo_trabajo' => 'EAPAC09',
],

// Equipo 08774 - Lenovo 32643N2
[
    'Num_inv' => '08774',
    'nombre' => 'L4586C5E',
    'tipo_equipo_id' => 1, // Laptop
    'marca_id' => 8, // Lenovo Laptop
    'modelo_id' => 44, // 32643N2
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 4, // Office365
    'mac' => '62:c5:8b:17:2f:5e',
    'ip' => '172.16.12.232',
    'estado_id' => 1,
    'grupo_trabajo' => 'ECPAC01',
],

// Equipo 08776 - Lenovo 32643N2
[
    'Num_inv' => '08776',
    'nombre' => 'L4586ABF',
    'tipo_equipo_id' => 1, // Laptop
    'marca_id' => 8, // Lenovo Laptop
    'modelo_id' => 44, // 32643N2
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 5, // Ninguna
    'mac' => '55:ab:57:af:5f:bf',
    'ip' => '172.16.28.4',
    'estado_id' => 1,
    'grupo_trabajo' => 'EAPAC17',
],

// Equipo 08778 - Lenovo 32643N2
[
    'Num_inv' => '08778',
    'nombre' => 'L4587467',
    'tipo_equipo_id' => 1, // Laptop
    'marca_id' => 8, // Lenovo Laptop
    'modelo_id' => 44, // 32643N2
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 5, // Ninguna
    'mac' => 'a3:46:8c:19:33:67',
    'ip' => '172.16.12.209',
    'estado_id' => 1,
    'grupo_trabajo' => 'EAPAC27',
],

// Equipo 08781 - Lenovo 32643N2
[
    'Num_inv' => '08781',
    'nombre' => 'L45874CD',
    'tipo_equipo_id' => 1, // Laptop
    'marca_id' => 8, // Lenovo Laptop
    'modelo_id' => 44, // 32643N2
    'sistema_operativo_id' => 4, // Windows 10
    'licenciaoriginal' => true,
    'version_office_id' => 4, // Office365
    'mac' => 'a6:4c:99:33:66:cd',
    'ip' => '172.16.60.15',
    'estado_id' => 1,
    'grupo_trabajo' => 'EAPAC24',
],


        ];

        foreach ($computadoras as $pc) {
            DatosComputadora::create($pc);
        }
        $this->command->info('Pruebas de inventario completa!');
    }
    
}