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
            'Disetujui',
            'Ditolak',
            'Menunggu',
        );
        $catatan = array(
            'Diambil di RW',
            'Ditolak karena status lokasi peternakan di dekat pemukiman',
            'Dibuat di RT',
        );
        $dates = array(
            '2024-05-11 12:24:30',
            '2024-05-25 07:51:28',
            '2024-03-23 09:37:45',
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
                    'catatan_persuratan' => $catatan[$i - 1],
                    'tanggal_persuratan' => $dates[$i - 1],
                    'created_at' => $dates[$i - 1],
                ]
            );
            $i++;
        }
    }
}
