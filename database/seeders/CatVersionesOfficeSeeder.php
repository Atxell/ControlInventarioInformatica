<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CatVersionesDeOffice;

class CatVersionesOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    $versiones = [
            ['nombre' => 'Microsoft Office 2010'],
            ['nombre' => 'Microsoft Office 2013'],
            ['nombre' => 'Microsoft Office 2016'],
            ['nombre' => 'Microsoft Office 2019'],
            ['nombre' => 'Microsoft Office 2021'],
        ];

        foreach ($versiones as $version) {
            CatVersionesDeOffice::create($version);
        }
        $this->command->info('VO creados exitosamente!');
    }
}
