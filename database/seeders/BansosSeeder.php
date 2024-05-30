<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate random data using Faker
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {
            $tanggal = $faker->dateTimeBetween('2024-06-01', '2024-06-10');
            DB::table('bansos')->insert([
                'id_bansos' => $i,
                'id_warga' => $faker->numberBetween(17, 64),
                'npwp' => $faker->randomFloat(3, 500000, 2000000), 
                'luas_tanah' => $faker->randomFloat(3, 10, 20),
                'tagihan_listrik' => $faker->randomFloat(3, 100000, 200000),
                'gaji' => $faker->numberBetween(99000, 300000),
                'jumlah_tanggungan' => 4,
                'jumlah_kendaraan' => $faker->numberBetween(1, 3),
                'tanggal_bansos' => $tanggal, // Include this field
                'created_at' => $tanggal,
            ]);
        }
    }
}
