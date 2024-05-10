<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class RwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rw')->insert(
            [
                'id_rw' => 1,
                'nomor_rw' => '005',
                'created_at' => now()->setTimezone('Asia/Jakarta'),
            ]
        );
    }
}
