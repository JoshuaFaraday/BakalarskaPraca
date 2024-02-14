<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::upsert([
            ['name' => 'Čierna'],
            ['name' => 'Červená'],
            ['name' => 'Zelená'],
            ['name' => 'Modrá'],
            ['name' => 'Žltá'],
            ['name' => 'Biela'],
            ['name' => 'Šedá'],
            ['name' => 'Oranžová'],
            ['name' => 'Fialová'],
            ['name' => 'Ružová'],
            ['name' => 'Hnedá'],
            

        ], ['name']);
    }
}
