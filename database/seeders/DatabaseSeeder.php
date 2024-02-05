<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProvincesSeeder::class,
            CitySeeder::class,
            ZoneSeeder::class,
            CarPartSeeder::class,
            SubcategorySeeder::class,
            PartSeeder::class,
            CarSeeder::class,
        ]);
    }
}
