<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Membership extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('membership_types')->insert([
            [
                'type_name' => 'Default',
                'durations' => 100,
                'session' => 0,
                'service' => 'Dry cleaning + Fold',
            ],
            [
                'type_name' => 'Silver',
                'durations' => 2,
                'session' => 2,
                'service' => 'Dry cleaning + Fold',
            ],
            [
                'type_name' => 'Gold',
                'durations' => 4,
                'session' => 8,
                'service' => 'Dry cleaning + Fold + Ironing',
            ],
            [
                'type_name' => 'Platinum',
                'durations' => 8,
                'session' => 16,
                'service' => 'Dry cleaning + Fold + Ironing',
            ],
        ]);
    }
}
