<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class StrukturRwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = array('Ketua RW', 'Wakil RW', 'Sekretaris RW', 'Bendahara RW');
        $kode = array('RWK', 'RWW', 'RWS', 'RWB');
        $i = 1;
        foreach ($names as $name) {
            DB::table('struktur_rw')->insert(
                [
                    'id_struktur' => $i,
                    'kode_struktur' => $kode[$i - 1],
                    'nama_struktur' => $name,
                    'created_at' => now(),
                ]
            );
            $i++;
        }

        for ($i = 5; $i <= 12; $i++) {
            $j = $i - 4;
            DB::table('struktur_rw')->insert(
                [
                    'id_struktur' => $i,
                    'kode_struktur' => 'RT' . $j,
                    'nama_struktur' => 'Ketua RT ' . $j,
                    'created_at' => now(),
                ]
            );
        }
    }
}
