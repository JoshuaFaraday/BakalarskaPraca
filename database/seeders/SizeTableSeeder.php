<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::upsert([
            ['value' => 'XS'],
            ['value' => 'S'],
            ['value' => 'M'],
            ['value' => 'L'],
            ['value' => 'XL'],
            ['value' => 'XXL'],
            ['value' => 'XXXL'],
            ['value' => '20'],
            ['value' => '21'],
            ['value' => '22'],
            ['value' => '23'],
            ['value' => '24'],
            ['value' => '25'],
            ['value' => '26'],
            ['value' => '27'],
            ['value' => '28'],
            ['value' => '29'],
            ['value' => '30'],
            ['value' => '31'],
            ['value' => '32'],
            ['value' => '33'],
            ['value' => '34'],
            ['value' => '35'],
            ['value' => '36'],
            ['value' => '37'],
            ['value' => '38'],
            ['value' => '39'],
            ['value' => '40'],
            ['value' => '41'],
            ['value' => '42'],
            ['value' => '43'],
            ['value' => '44'],
            ['value' => '45'],
            ['value' => '46'],
            ['value' => '47'],
            ['value' => '48'],
            ['value' => '49'],
            ['value' => '50'],
        ], ['value']);
    }
}
