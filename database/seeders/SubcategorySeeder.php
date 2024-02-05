<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcategory::create([
            'code_subcategory' => 'SUB001',
            'car_part_id' => 1,
            'name' => 'ELEMENTOS DE CARROCERÍA',
            'description' => 'Elemtos de la carrocería del vehículo',
        ]);
    }
}
