<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::upsert([
            ['name' => 'Nike'],
            ['name' => 'Adidas'],
            ['name' => 'Puma'],
            ['name' => 'Joma'],
            ['name' => 'Lotto'],
            ['name' => 'New Balance'],
            ['name' => 'Umbro'],
            ['name' => 'Under Armour'],

        ], ['name']);
    }
}
