<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Fragrance extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fragrances')->insert([
            ['fragrance_name' => 'Lavender'],
            ['fragrance_name' => 'Rose'],
            ['fragrance_name' => 'Vanilla'],
            ['fragrance_name' => 'Sandalwood'],
            ['fragrance_name' => 'Citrus'],
        ]);
    }
}
