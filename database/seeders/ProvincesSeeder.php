<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Province;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create([
            'code_province' => 'AZU',
            'name' => 'AZUAY',
        ]);
        Province::create([
            'code_province' => 'GAL',
            'name' => 'GALÁPAGOS',
        ]);
        Province::create([
            'code_province' => 'CAÑ',
            'name' => 'CAÑAR',
        ]);
        Province::create([
            'code_province' => 'BOL',
            'name' => 'BOLIVAR',
        ]);
        Province::create([
            'code_province' => 'CAR',
            'name' => 'CARCHI',
        ]);
        Province::create([
            'code_province' => 'CHI',
            'name' => 'CHIMBORAZO',
        ]);
        Province::create([
            'code_province' => 'COT',
            'name' => 'COTOPAXI',
        ]);
        Province::create([
            'code_province' => 'ORO',
            'name' => 'EL ORO',
        ]);
        Province::create([
            'code_province' => 'ESM',
            'name' => 'ESMERALDAS',
        ]);
        Province::create([
            'code_province' => 'GUA',
            'name' => 'GUAYAS',
        ]);
        Province::create([
            'code_province' => 'SEL',
            'name' => 'SANTA ELENA',
        ]);
        Province::create([
            'code_province' => 'LOJ',
            'name' => 'LOJA',
        ]);
        Province::create([
            'code_province' => 'MSA',
            'name' => 'MORONA SANTIAGO',
        ]);
        Province::create([
            'code_province' => 'IMB',
            'name' => 'IMBABURA',
        ]);
        Province::create([
            'code_province' => 'LOS',
            'name' => 'LOS RIOS',
        ]);
        Province::create([
            'code_province' => 'MAN',
            'name' => 'MANABI',
        ]);
        Province::create([
            'code_province' => 'NAP',
            'name' => 'NAPO',
        ]);
        Province::create([
            'code_province' => 'ORE',
            'name' => 'ORELLANA',
        ]);
        Province::create([
            'code_province' => 'PAS',
            'name' => 'PASTAZA',
        ]);
        Province::create([
            'code_province' => 'SDO',
            'name' => 'SANTO DOMINGO DE LOS TSÁCHILAS',
        ]);
        Province::create([
            'code_province' => 'PIC',
            'name' => 'PICHINCHA',
        ]);
        Province::create([
            'code_province' => 'SUC',
            'name' => 'SUCUMBIOS',
        ]);
        Province::create([
            'code_province' => 'TUN',
            'name' => 'TUNGURAHUA',
        ]);
        Province::create([
            'code_province' => 'ZAM',
            'name' => 'ZAMORA CHINCHIPE',
        ]);
    }
}
