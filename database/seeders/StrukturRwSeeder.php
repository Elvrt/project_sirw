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
        $codes = array('RT1', 'RT2', 'RT3', 'RT4', 'RT5', 'RT6', 'RT7', 'RT8', 'KRW', 'WRW', 'SRW', 'BRW',);
        $name = array(
            'Ketua RT 01', 'Ketua RT 02', 'Ketua RT 03', 'Ketua RT 04', 'Ketua RT 05', 'Ketua RT 06', 'Ketua RT 07', 'Ketua RT 08',
            'Ketua RW', 'Wakil RW', 'Sekretaris RW', 'Bendahara RW',
        );
        $id = array('1', '5', '9', '13', '17', '21', '25', '29', '3', '1', '4', '6',);
        $i = 1;
        foreach ($codes as $code) {
            DB::table('struktur_rw')->insert(
                [
                    'id_struktur' => $i,
                    'kode_struktur' => $code,
                    'nama_struktur' => $name,
                    'id_warga' => $id,
                    'created_at' => now(),
                ]
            );
            $i++;
        }
    }
}
