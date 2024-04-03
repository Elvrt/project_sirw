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
        $faker = Factory::create();
        // Loop sebanyak 5 untuk setiap id_rt (total 24 data)
        for ($i = 1; $i <= 8; $i++) {
            // Insert 8 data untuk setiap id_rt
            for ($j = 1; $j <= 3; $j++) {
                // Menghasilkan nomor KK dengan kombinasi 16 digit
                $no_kk = '';
                for ($k = 0; $k < 16; $k++) {
                    $no_kk .= $faker->randomDigit();
                }

                DB::table('kartu_keluarga')->insert(
                    [
                        'id_rt' => $i,
                        'no_kk' => $no_kk,
                        'created_at' => now(),
                    ]
                );
            }
        }
    }
}
