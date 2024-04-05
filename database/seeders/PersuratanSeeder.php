<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;


class PersuratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = array('23', '27', '11',);
        $types = array(
            'Surat Domisili',
            'Surat Keterangan Usaha',
            'Surat Domisili',
        );
        $note = array(
            'Untuk pembukaan rekening bank pribadi',
            'Untuk pengajuan izin usaha Ternak Barokah',
            'Untuk keperluan administrasi kependudukan',
        );
        $status = array(
            'Diambil di RW',
            'Menunngu',
            'Menunggu',
        );
        $i = 1;
        foreach ($types as $type) {
            DB::table('persuratan')->insert(
                [
                    'id_persuratan' => $i,
                    'id_warga' => $id[$i - 1],
                    'jenis_persuratan' => $type,
                    'keterangan_persuratan' => $note[$i - 1],
                    'status_persuratan' => $status[$i - 1],
                    'tanggal_persuratan' => now(),
                    'created_at' => now(),
                ]
            );
            $i++;
        }
    }
}
