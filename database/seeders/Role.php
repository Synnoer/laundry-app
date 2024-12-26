<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed roles
        DB::table('roles')->insert([
            ['role_name' => 'Admin'],
            ['role_name' => 'User'],
        ]);
    }
}
