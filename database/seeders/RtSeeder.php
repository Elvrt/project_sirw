<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class RtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 8; $i++) {
            DB::table('rt')->insert(
                [
                    'id_rt' => $i,
                    'nomor_rt' => '00' . $i,
                    'id_rw' => 1,
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
        }
    }
}
