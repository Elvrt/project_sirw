<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class IuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 16; $i++) {
            DB::table('iuran')->insert(
                [
                    'id_iuran' => $i,
                    'id_kk' => $i,
                    'nominal' => 15000,
                    'status_iuran' => 'Lunas',
                    'tanggal_iuran' => '2024-02-14',
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
        }
    }
}
