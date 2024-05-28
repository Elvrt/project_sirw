<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class SktmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = array('15', '19', '26',);
        $notes = array(
            'Untuk pengajuan DTKS di Dinas Sosial Kota Malang',
            'Untuk pengajuan bansos ke Kelurahan Tasikmadu',
            'Untuk pengajuan pembuatan BPJS',
        );
        $house = array(
            '1716864888_6655477843eeb.jpg',
            '1716868191_6655545fc28db.jpg',
            '1716871441_66556111f23f8.jpg',
        );
        $salary = array(
            '1100000',
            '6300000',
            '1200000',
        );
        $slip = array(
            '1716864888_66554778445b7.jpg',
            '1716868191_6655545fc3468.jpg',
            '1716871441_66556111f304e.jpg',
        );
        $vehicle = array(
            '1',
            '3',
            '2',
        );
        $status = array(
            'Disetujui',
            'Ditolak',
            'Menunggu',
        );
        $catatan = array(
            'Silahkan diambil di Ketua RW',
            'Ditolak karena jumlah penghasilan diperkirakan mencukupi untuk kebutuhan sehari-hari',
            'Masih dibuat di Ketua RT',
        );
        $dates = array(
            '2024-06-02 12:34:10',
            '2024-06-05 15:03:24',
            '2024-06-07 08:27:49',
        );
        $i = 1;
        foreach ($notes as $note) {
            DB::table('sktm')->insert(
                [
                    'id_sktm' => $i,
                    'id_warga' => $id[$i - 1],
                    'keterangan_sktm' => $note,
                    'gambar_rumah' => $house[$i - 1],
                    'jumlah_penghasilan' => $salary[$i - 1],
                    'gambar_slip' => $slip[$i - 1],
                    'jumlah_anggota' => 4,
                    'jumlah_kendaraan' => $vehicle[$i - 1],
                    'status_sktm' => $status[$i - 1],
                    'catatan_sktm' => $catatan[$i - 1],
                    'tanggal_sktm' => $dates[$i - 1],
                    'created_at' => $dates[$i - 1],
                ]
            );
            $i++;
        }
    }
}
