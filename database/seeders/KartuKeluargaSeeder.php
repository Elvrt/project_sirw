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
                $no = sprintf('%06d', (($i - 1) * 2) + $j);
                DB::table('kartu_keluarga')->insert(
                    [
                        'id_kk' => (($i - 1) * 2) + $j,
                        'id_rt' => $i,
                        'no_kk' => '3573051012' . $no,
                        'created_at' => now()->setTimezone('Asia/Jakarta'),
                    ]
                );
            }
        }
        // Generate random data using Faker
        $base_id_kk = 16;
        $generated_no_kk = [];
        for ($i = 1; $i <= 8; $i++) {
            for ($j = 1; $j <= 30; $j++) {
                do {
                    $no = sprintf('%06d', mt_rand(17, 999999));
                    $full_no_kk = '3573051012' . $no;
                } while (in_array($full_no_kk, $generated_no_kk) || DB::table('kartu_keluarga')->where('no_kk', $full_no_kk)->exists());
                DB::table('kartu_keluarga')->insert(
                    [
                        'id_kk' => $base_id_kk + (($i - 1) * 30) + $j,
                        'id_rt' => $i,
                        'no_kk' => $full_no_kk,
                        'created_at' => now()->setTimezone('Asia/Jakarta'),
                    ]
                );
                $generated_no_kk[] = $full_no_kk;
            }
        }
    }
}
