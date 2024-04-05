<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class KartuKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 8; $i++) {
            for ($j = 1; $j <= 2; $j++) {
                $no = sprintf('%04d', (($i - 1) * 2) + $j);
                DB::table('kartu_keluarga')->insert(
                    [
                        'id_kk' => (($i - 1) * 2) + $j,
                        'id_rt' => $i,
                        'no_kk' => '3573051012' . $no,
                        'created_at' => now(),
                    ]
                );
            }
        }
    }
}
