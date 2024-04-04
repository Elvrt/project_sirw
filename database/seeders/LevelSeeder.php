<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = array('RW Admin', 'RT Admin', 'Warga');
        $kode = array('RWA', 'RTA', 'WRG');
        $i = 1;
        foreach ($levels as $level) {
            DB::table('level')->insert(
                [
                    'id_level' => $i,
                    'kode_level' => $kode[$i - 1],
                    'nama_level' => $level,
                    'created_at' => now(),
                ]
            );
            $i++;
        }
    }
}
