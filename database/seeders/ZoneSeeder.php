<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zone;

class ZoneSeeder extends Seeder
{
    public function run(): void
    {
        Zone::create([
            'code_zone' => 'ZON001',
            'name' => 'Interior',
            'description' => 'Zona interior del automóvil',
        ]);
        Zone::create([
            'code_zone' => 'ZON002',
            'name' => 'Exterior',
            'description' => 'Zona exterior del automóvil',
        ]);
    }
}
