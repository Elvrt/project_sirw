<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class FasilitasUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = array(
            'Masjid Al-Azhar',
            'Balai Kelurahan Tasikmadu',
            'Lapangan Tasik Madu',
            'Masjid Al-Ikhlas',
            'Balai RW 05',
            'Taman Bunga Cempaka',
        );
        $notes = array(
            'Digunakan untuk ibadah dan kegiatan umat muslim.',
            'Digunakan untuk acara berbagai kegiatan sosial, administratif, dan budaya di tingkat kelurahan.',
            'Digunakan untuk kegiatan olahraga.',
            'Digunakan untuk ibadah dan kegiatan umat muslim.',
            'Digunakan untuk acara berbagai kegiatan sosial, administratif, dan budaya di tingkat RW.',
            'Digunakan sebagai ruang publik untuk berbagai kegiatan.',
        );
        $address = array(
            'Jl. Mawar',
            'Jl. Taruna',
            'Jl. Brawijaya',
            'Jl. Wayang',
            'Jl. Kartini',
            'Jl. Cempaka',
        );
        $images = array(
           '1715794351_6644f1afb46a6.jpg',
           '1715794375_6644f1c77203e.jpg',
           '1715794399_6644f1df2f827.jpg',
           '1715794437_6644f2052db40.jpg',
           '1715794473_6644f22969765.jpg',
           '1715794501_6644f24545a40.jpg',
        );
        $rt = array('1', '6', '3', '7', '4', '8');
        $i = 1;
        foreach ($names as $name) {
            DB::table('fasilitas_umum')->insert(
                [
                    'id_fasilitas' => $i,
                    'nama_fasilitas' => $name,
                    'keterangan_fasilitas' => $notes[$i - 1],
                    'alamat_fasilitas' => $address[$i - 1],
                    'gambar_fasilitas' => $images[$i - 1],
                    'id_rt' => $rt[$i - 1],
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
            $i++;
        }
    }
}
