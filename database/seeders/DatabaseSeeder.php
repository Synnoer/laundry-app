<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        // Seed users
        DB::table('users')->insert([
            [
                'name' => 'Dimas',
                'gender' => 'M',
                'address' => 'Cibiru',
                'phone' => '1234567890',
                'avatar_url' => null,
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1,
                'membership_id' => 1,
            ],
            [
                'name' => 'Diman',
                'gender' => 'M',
                'address' => 'Cibiru',
                'phone' => '0987654321',
                'avatar_url' => null,
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 2,
                'membership_id' => 1,
            ],
        ]);
    }
}
