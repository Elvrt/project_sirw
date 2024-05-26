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
        $id = array('23', '27', '11', '10', '20', '30', '28', '19', '15', '8', '14',);
        $types = array(
            'Surat Kematian',
            'Surat Domisili',
            'Surat Keterangan Usaha',
            'Surat Domisili',
            'Surat Kematian',
            'Surat Keterangan Usaha',
            'Surat Kematian',
            'Surat Domisili',
            'Surat Keterangan Usaha',
            'Surat Keterangan Usaha',
            'Surat Domisili',
        );
        $note = array(
            'Untuk keperluan pencairan asuransi',
            'Untuk keperluan pendaftaran beasiswa',
            'Untuk pengajuan izin usaha Resto Sambal Bakar',
            'Untuk pendaftaran sekolah SMA jalur zonasi',
            'Untuk keperluan pencairan BPJS',
            'Untuk pengajuan izin usaha Ternak Barokah',
            'Untuk keperluan mengurus perpindahan warisan',
            'Untuk keperluan administrasi perubahan di Kartu Keluarga',
            'Untuk pengajuan izin usaha kos-kosan',
            'Untuk pengajuan izin usaha Rental Mobil',
            'Untuk keperluan administrasi kependudukan',
        );
        $status = array(
            'Disetujui',
            'Disetujui',
            'Disetujui',
            'Disetujui',
            'Disetujui',
            'Ditolak',
            'Disetujui',
            'Disetujui',
            'Menunggu',
            'Menunggu',
            'Menunggu',
        );
        $catatan = array(
            'Silahkan diambil di Ketua RW',
            'Silahkan diambil di Ketua RW',
            'Silahkan diambil di Ketua RW',
            'Silahkan diambil di Ketua RW',
            'Silahkan diambil di Ketua RW',
            'Ditolak karena status lokasi peternakan di dekat pemukiman',
            'Silahkan diambil di Ketua RW',
            'Silahkan diambil di Ketua RW',
            'Menunggu validasi Ketua RW',
            'Masih dibuat di Ketua RT',
            'Masih dibuat di Ketua RT',
        );
        $dates = array(
            '2024-04-02 12:24:30',
            '2024-04-14 07:51:28',
            '2024-04-27 09:37:45',
            '2024-05-09 12:01:10',
            '2024-05-11 13:19:39',
            '2024-05-17 08:43:53',
            '2024-05-24 20:29:37',
            '2024-06-03 18:32:43',
            '2024-06-04 13:05:17',
            '2024-06-07 06:49:10',
            '2024-06-08 14:50:25',
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
