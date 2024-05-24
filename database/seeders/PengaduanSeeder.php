<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = array('11', '15', '19',);
        $titles = array(
            'Pohon Tumbang di Jalan Mataram',
            'Lampu Jalan Mati di Jalan Diponegoro',
            'Kebocoran Pipa Air di Jalan Puntadewa',
        );
        $description = array(
            'Ada pohon tumbang di Jalan Mataram yang menghalangi lalu lintas kendaraan dan pejalan kaki. Mohon untuk segera ditangani agar tidak menimbulkan bahaya bagi warga sekitar.',
            'Beberapa lampu jalan di Jalan Diponegoro tidak menyala sejak beberapa hari yang lalu, menyebabkan area tersebut gelap dan membahayakan keamanan warga. Mohon perbaikan segera.',
            'Terdapat kebocoran pipa air di Jalan Puntadewa yang telah menyebabkan genangan air di sekitar area tersebut. Mohon untuk segera diperbaiki agar tidak mengganggu aktivitas warga.',
        );
        $status = array('Selesai', 'Menunggu', 'Menunggu');
        $catatan = array(
            'Pohon sudah pinggirkan',
            'Sudah koordinasi dengan PLN, akan segera diperbaiki',
            'Sudah diatasi oleh PDAM setempat',
        );
        $dates = array(
            '2024-02-14 18:02:47',
            '2024-03-22 22:19:39',
            '2024-03-23 21:34:25',
        );
        $i = 1;
        foreach ($titles as $title) {
            DB::table('pengaduan')->insert(
                [
                    'id_pengaduan' => $i,
                    'id_warga' => $id[$i - 1],
                    'judul_pengaduan' => $title,
                    'deskripsi_pengaduan' => $description[$i - 1],
                    'status_pengaduan' => $status[$i - 1],
                    'catatan_pengaduan' => $catatan[$i - 1],
                    'tanggal_pengaduan' => $dates[$i - 1],
                    'created_at' => $dates[$i - 1],
                ]
            );
            $i++;
        }
    }
}
