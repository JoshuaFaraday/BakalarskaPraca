<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $genders = ['Muž', 'Žena', 'Dieťa','unisex'];

    foreach ($genders as $gender) {
        Gender::create(['name' => $gender]);
    }
}

}
