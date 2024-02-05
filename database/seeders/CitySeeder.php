<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //AZUAY
        City::create([
            'code_city' => 'CUE',
            'province_id' => 1,
            'name' => 'CUENCA',
        ]);
        City::create([
            'code_city' => 'GUA',
            'province_id' => 1,
            'name' => 'GUALACEO',
        ]);
        City::create([
            'code_city' => 'PAU',
            'province_id' => 1,
            'name' => 'PAUTE',
        ]);
        City::create([
            'code_city' => 'SIG',
            'province_id' => 1,
            'name' => 'SIGSIG',
        ]);
        City::create([
            'code_city' => 'GIR',
            'province_id' => 1,
            'name' => 'GIRÓN',
        ]);
        City::create([
            'code_city' => 'SAF',
            'province_id' => 1,
            'name' => 'SAN FERNANDO',
        ]);
        City::create([
            'code_city' => 'SAI',
            'province_id' => 1,
            'name' => 'SANTA ISABEL',
        ]);
        City::create([
            'code_city' => 'PUC',
            'province_id' => 1,
            'name' => 'PUCARÁ',
        ]);
        City::create([
            'code_city' => 'NAB',
            'province_id' => 1,
            'name' => 'NABÓN',
        ]);
        //GALÁPAGOS
        City::create([
            'code_city' => 'ISA',
            'province_id' => 2,
            'name' => 'ISABELA',
        ]);
        City::create([
            'code_city' => 'SAC',
            'province_id' => 2,
            'name' => 'SANTA CRUZ',
        ]);
        City::create([
            'code_city' => 'PBM',
            'province_id' => 2,
            'name' => 'PUERTO BAQUERIZO MORENO',
        ]);
        City::create([
            'code_city' => 'PUA',
            'province_id' => 2,
            'name' => 'PUERTO AYORA',
        ]);
        //CAÑAR
        City::create([
            'code_city' => 'CAN',
            'province_id' => 3,
            'name' => 'CAÑAR',
        ]);
        City::create([
            'code_city' => 'BIB',
            'province_id' => 3,
            'name' => 'BIBLIÁN',
        ]);
        City::create([
            'code_city' => 'AZO',
            'province_id' => 3,
            'name' => 'AZOGUES',
        ]);
        City::create([
            'code_city' => 'LATR',
            'province_id' => 3,
            'name' => 'LA TRONCAL',
        ]);
        //BOLIVAR
        City::create([
            'code_city' => 'GUAR',
            'province_id' => 4,
            'name' => 'GUARANDA',
        ]);
        City::create([
            'code_city' => 'SMB',
            'province_id' => 4,
            'name' => 'SAN MIGUEL DE BOLÍVAR',
        ]);
        City::create([
            'code_city' => 'CAL',
            'province_id' => 4,
            'name' => 'CALUMA',
        ]);
        City::create([
            'code_city' => 'CHI',
            'province_id' => 4,
            'name' => 'CHILLANES',
        ]);
        City::create([
            'code_city' => 'ECHE',
            'province_id' => 4,
            'name' => 'ECHEANDÍA',
        ]);
        City::create([
            'code_city' => 'CHIM',
            'province_id' => 4,
            'name' => 'CHIMBO',
        ]);
        City::create([
            'code_city' => 'LAA',
            'province_id' => 4,
            'name' => 'LA ASUNCIÓN',
        ]);
        City::create([
            'code_city' => 'LA',
            'province_id' => 4,
            'name' => 'LA MAGDALENA',
        ]);
        //CARCHI
        City::create([
            'code_city' => 'MIR',
            'province_id' => 5,
            'name' => 'MIRA',
        ]);
        City::create([
            'code_city' => 'BOL',
            'province_id' => 5,
            'name' => 'BOLÍVAR',
        ]);
        City::create([
            'code_city' => 'TUL',
            'province_id' => 5,
            'name' => 'TULCÁN',
        ]);
        City::create([
            'code_city' => 'ELA',
            'province_id' => 5,
            'name' => 'EL ANGEL',
        ]);
        City::create([
            'code_city' => 'HUA',
            'province_id' => 5,
            'name' => 'HUACA',
        ]);
        City::create([
            'code_city' => 'JUA',
            'province_id' => 5,
            'name' => 'JULIO ANDRADE',
        ]);
        City::create([
            'code_city' => 'LAP',
            'province_id' => 5,
            'name' => 'LA PAZ',
        ]);
        City::create([
            'code_city' => 'SAG',
            'province_id' => 5,
            'name' => 'SAN GABRIEL',
        ]);
        //CHIMBORAZO
        City::create([
            'code_city' => 'RIO',
            'province_id' => 6,
            'name' => 'RIOBAMBA',
        ]);
        City::create([
            'code_city' => 'GUAN',
            'province_id' => 6,
            'name' => 'GUANO',
        ]);
        City::create([
            'code_city' => 'CHAM',
            'province_id' => 6,
            'name' => 'CHAMBO',
        ]);
        City::create([
            'code_city' => 'COL',
            'province_id' => 6,
            'name' => 'COLTA',
        ]);
        City::create([
            'code_city' => 'PEN',
            'province_id' => 6,
            'name' => 'PENIPE',
        ]);
        City::create([
            'code_city' => 'GUAM',
            'province_id' => 6,
            'name' => 'GUAMOTE',
        ]);
        City::create([
            'code_city' => 'PALL',
            'province_id' => 6,
            'name' => 'PALLATANGA',
        ]);
        City::create([
            'code_city' => 'ALAU',
            'province_id' => 6,
            'name' => 'ALAUSÍ',
        ]);
        City::create([
            'code_city' => 'CHUN',
            'province_id' => 6,
            'name' => 'CHUNCHI',
        ]);
        City::create([
            'code_city' => 'CUM',
            'province_id' => 6,
            'name' => 'CUMANDÁ',
        ]);
        City::create([
            'code_city' => 'CAJ',
            'province_id' => 6,
            'name' => 'CAJABAMBA',
        ]);
        City::create([
            'code_city' => 'HUI',
            'province_id' => 6,
            'name' => 'HUIGRA',
        ]);
        City::create([
            'code_city' => 'SAAN',
            'province_id' => 6,
            'name' => 'SAN ANDRÉS',
        ]);
        City::create([
            'code_city' => 'SANJ',
            'province_id' => 6,
            'name' => 'SAN JUAN',
        ]);
        //COTOPAXI
        City::create([
            'code_city' => 'SAQ',
            'province_id' => 7,
            'name' => 'SAQUISILÍ',
        ]);
        City::create([
            'code_city' => 'LAT',
            'province_id' => 7,
            'name' => 'LATACUNGA',
        ]);
        City::create([
            'code_city' => 'PUJ',
            'province_id' => 7,
            'name' => 'PUJILÍ',
        ]);
        City::create([
            'code_city' => 'SAL',
            'province_id' => 7,
            'name' => 'SALCEDO',
        ]);
        City::create([
            'code_city' => 'SIGCH',
            'province_id' => 7,
            'name' => 'SIGCHOS',
        ]);
        City::create([
            'code_city' => 'LAM',
            'province_id' => 7,
            'name' => 'LA MANÁ',
        ]);
        City::create([
            'code_city' => 'CHAN',
            'province_id' => 7,
            'name' => 'CHANTILLIN',
        ]);
        City::create([
            'code_city' => 'ELC',
            'province_id' => 7,
            'name' => 'EL CORAZÓN',
        ]);
        City::create([
            'code_city' => 'GUAY',
            'province_id' => 7,
            'name' => 'GUAYTACAMA',
        ]);
        City::create([
            'code_city' => 'LASS',
            'province_id' => 7,
            'name' => 'LASSO',
        ]);
        City::create([
            'code_city' => 'PASTO',
            'province_id' => 7,
            'name' => 'PASTOCALLE',
        ]);
        City::create([
            'code_city' => 'POA',
            'province_id' => 7,
            'name' => 'POALO',
        ]);
        City::create([
            'code_city' => 'TANI',
            'province_id' => 7,
            'name' => 'TANICUCHÍ',
        ]);
        City::create([
            'code_city' => 'TOAC',
            'province_id' => 7,
            'name' => 'TOACASO',
        ]);
        City::create([
            'code_city' => 'MULA',
            'province_id' => 7,
            'name' => 'MULALÓ',
        ]);
        //EL ORO

        //ESMERALDAS

        //GUAYAS

        //SANTA ELENA

        //LOJA

        //MORONA SANTIAGO

        //IMBABURA

        //LOS RIOS

        //MANABI

        //NAPO

        //ORELLANA

        //PASTAZA

        //SANTO DOMINGO DE LOS TSACHILAS

        //PICHINCHA

        //SUCUMBIOS

        //TUNGURAHUA

        //ZAMORA CHINCHIPE

    }
}
