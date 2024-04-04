<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nik = 2;
        $names = array();
        $jk = array('L', 'P');
        $tempat = array('');
        $date = array('');
        $address = array('');
        $nomor = array();
        $agama = array();
        $jobTitle = array();
        $income = array();
        $status = array('Kepala Keluarga', 'Anggota');

        for ($i = 1; $i <= 16; $i++) {
            DB::table('warga')->insert(
                [
                    'id_iuran' => $i,
                    'id_kk' => $i,
                    'nominal' => 15000,
                    'status_iuran' => 'Lunas',
                    'tanggal_iuran' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}
