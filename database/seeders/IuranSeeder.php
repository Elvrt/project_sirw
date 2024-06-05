<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate random data using Faker
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 256; $i++) {
            DB::table('iuran')->insert(
                [
                    'id_iuran' => $i,
                    'id_kk' => $i,
                    'nominal' => 15000,
                    'status_iuran' => 'Lunas',
                    'tanggal_iuran' => $faker->dateTimeBetween('2024-01-01', '2024-01-31')->format('Ymd'),
                    'created_at' => $faker->dateTimeBetween('2024-01-01', '2024-01-31')->format('Ymd'),
                ]
            );
        }
        for ($i = 1; $i <= 256; $i++) {
            DB::table('iuran')->insert(
                [
                    // 'id_iuran' => $i,
                    'id_kk' => $i,
                    'nominal' => 15000,
                    'status_iuran' => 'Lunas',
                    'tanggal_iuran' => $faker->dateTimeBetween('2024-02-01', '2024-02-28')->format('Ymd'),
                    'created_at' => $faker->dateTimeBetween('2024-02-01', '2024-02-28')->format('Ymd'),
                ]
            );
        }
        for ($i = 1; $i <= 256; $i++) {
            DB::table('iuran')->insert(
                [
                    // 'id_iuran' => $i,
                    'id_kk' => $i,
                    'nominal' => 15000,
                    'status_iuran' => 'Lunas',
                    'tanggal_iuran' => $faker->dateTimeBetween('2024-03-01', '2024-03-31')->format('Ymd'),
                    'created_at' => $faker->dateTimeBetween('2024-03-01', '2024-03-31')->format('Ymd'),
                ]
            );
        }
        for ($i = 1; $i <= 256; $i++) {
            DB::table('iuran')->insert(
                [
                    // 'id_iuran' => $i,
                    'id_kk' => $i,
                    'nominal' => 15000,
                    'status_iuran' => 'Lunas',
                    'tanggal_iuran' => $faker->dateTimeBetween('2024-04-01', '2024-04-30')->format('Ymd'),
                    'created_at' => $faker->dateTimeBetween('2024-04-01', '2024-04-30')->format('Ymd'),
                ]
            );
        }
        for ($i = 1; $i <= 256; $i++) {
            DB::table('iuran')->insert(
                [
                    // 'id_iuran' => $i,
                    'id_kk' => $i,
                    'nominal' => 15000,
                    'status_iuran' => 'Lunas',
                    'tanggal_iuran' => $faker->dateTimeBetween('2024-05-01', '2024-05-31')->format('Ymd'),
                    'created_at' => $faker->dateTimeBetween('2024-04-01', '2024-04-30')->format('Ymd'),
                ]
            );
        }
        for ($i = 1; $i <= 16; $i++) {
            DB::table('iuran')->insert(
                [
                    // 'id_iuran' => $i,
                    'id_kk' => $i,
                    'nominal' => 7500,
                    'status_iuran' => 'Belum Lunas',
                    'tanggal_iuran' => $faker->dateTimeBetween('2024-06-01', '2024-06-09')->format('Ymd'),
                    'created_at' => $faker->dateTimeBetween('2024-06-01', '2024-06-09')->format('Ymd'),
                ]
            );
        }
    }
}
