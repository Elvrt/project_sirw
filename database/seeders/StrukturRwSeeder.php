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
        $codes = array('KRW', 'WRW', 'SRW', 'BRW', 'RT1', 'RT2', 'RT3', 'RT4', 'RT5', 'RT6', 'RT7', 'RT8',);
        $name = array(
            'Ketua RW', 'Wakil RW', 'Sekretaris RW', 'Bendahara RW',
            'Ketua RT 01', 'Ketua RT 02', 'Ketua RT 03', 'Ketua RT 04',
            'Ketua RT 05', 'Ketua RT 06', 'Ketua RT 07', 'Ketua RT 08',
        );
        $id = array('3', '7', '4', '6', '1', '5', '9', '13', '17', '21', '25', '29',);
        $i = 1;
        foreach ($codes as $code) {
            DB::table('struktur_rw')->insert(
                [
                    'id_struktur' => $i,
                    'kode_struktur' => $codes[$i - 1],
                    'nama_struktur' => $name[$i - 1],
                    'id_warga' => $id[$i - 1],
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
            $i++;
        }
    }
}
