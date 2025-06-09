<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modelo;

class CatModelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $modelos = [
            ['marca_id' => 9, 'nombre' => 'ASPIRE 3950'],
            ['marca_id' => 6, 'nombre' => 'XPS'],
            ['marca_id' => 6, 'nombre' => 'VOSTRO 14 3000'],
            ['marca_id' => 6, 'nombre' => 'LATITUDE 5480'],
            ['marca_id' => 6, 'nombre' => 'INSPIRION 3646'],
            ['marca_id' => 7, 'nombre' => 'PAVILION P6-2150LA'],
            ['marca_id' => 7, 'nombre' => 'G42'],
            ['marca_id' => 7, 'nombre' => 'COMPAQ CQ1507LA'],
            ['marca_id' => 8, 'nombre' => 'IDEAPAD S340'],
            ['marca_id' => 8, 'nombre' => 'IDEACENTRE AIO 310-20IAP'],
            ['marca_id' => 1, 'nombre' => 'VOSTRO D06S'],
            ['marca_id' => 1, 'nombre' => 'VOSTRO 5410'],
            ['marca_id' => 1, 'nombre' => 'VOSTRO 430'],
            ['marca_id' => 1, 'nombre' => 'VOSTRO 3710'],
            ['marca_id' => 1, 'nombre' => 'VOSTRO 3490'],
            ['marca_id' => 1, 'nombre' => 'VOSTRO 3471'],
            ['marca_id' => 1, 'nombre' => 'VOSTRO 270S'],
            ['marca_id' => 1, 'nombre' => 'PRODESK 600 G1'],
            ['marca_id' => 1, 'nombre' => 'PRECISION TOWER 3620'],
            ['marca_id' => 1, 'nombre' => 'PRECISION TOWER 3610'],
            ['marca_id' => 1, 'nombre' => 'OPTIPLEX 7090'],
            ['marca_id' => 1, 'nombre' => 'OPTIPLEX 3080'],
            ['marca_id' => 1, 'nombre' => 'OPTIPLEX 3050'],
            ['marca_id' => 1, 'nombre' => 'DELL D13S'],
            ['marca_id' => 1, 'nombre' => 'DELL D10S'],
            ['marca_id' => 1, 'nombre' => 'DELL 15S'],
            ['marca_id' => 2, 'nombre' => 'PRODESK 800 G1'],
            ['marca_id' => 2, 'nombre' => 'PRODESK 600 G1'],
            ['marca_id' => 2, 'nombre' => 'PRODESK 405 G2'],
            ['marca_id' => 2, 'nombre' => 'PRODESK 400 G1'],
            ['marca_id' => 2, 'nombre' => 'PRO 3130'],
            ['marca_id' => 2, 'nombre' => 'PRO 1005 ALL IN ONE'],
            ['marca_id' => 2, 'nombre' => 'HP PRO 3130 MT'],
            ['marca_id' => 2, 'nombre' => 'HP 280 GS'],
            ['marca_id' => 2, 'nombre' => 'ELITEDESK 800 G1'],
            ['marca_id' => 2, 'nombre' => 'ELITEDESK 705 G2'],
            ['marca_id' => 2, 'nombre' => 'COMPAQ PRO 6305'],
            ['marca_id' => 2, 'nombre' => 'COMPAQ 6200 PRO'],
            ['marca_id' => 2, 'nombre' => '280 G5 SFF'],
            ['marca_id' => 2, 'nombre' => '260 G3 DM'],
            ['marca_id' => 2, 'nombre' => '200 G3 ALL IN ONE'],
            ['marca_id' => 3, 'nombre' => 'THINKCENTRE'],
            ['marca_id' => 3, 'nombre' => 'ENSAMBLE'],
            ['marca_id' => 4, 'nombre' => 'TITAN 4010'],
            ['marca_id' => 4, 'nombre' => 'TITAN 3140']
        ];
        
        foreach ($modelos as $modelo) {
            Modelo::create($modelo);
        }
        $this->command->info('Modelos creados exitosamente!');
    }
}
