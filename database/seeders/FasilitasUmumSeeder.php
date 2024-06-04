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
            'Taman Hijau Lestari',
            'Gedung Serba Guna',
            'Lapangan Voli',
        );
        $notes = array(
            'Digunakan untuk ibadah dan kegiatan umat muslim.',
            'Digunakan untuk acara berbagai kegiatan sosial, administratif, dan budaya di tingkat kelurahan.',
            'Digunakan untuk kegiatan olahraga.',
            'Digunakan untuk ibadah umat islam.',
            'Digunakan untuk acara berbagai kegiatan sosial, administratif, dan budaya di tingkat RW.',
            'Digunakan sebagai ruang publik untuk berbagai kegiatan.',
            'Digunakan sebagai ruang hijau publik.',
            'Digunakan untuk berbagai kegiatan, seperti kegiatan olahraga, rapat, dll.',
            'Digunakan untuk kegiatan olahraga voli',
        );
        $address = array(
            'Jl. Mawar',
            'Jl. Taruna',
            'Jl. Brawijaya',
            'Jl. Wayang',
            'Jl. Kartini',
            'Jl. Cempaka',
            'Jl. Atletik',
            'Jl. Werkudara',
            'Jl. Jambu',
        );
        $images = array(
           'https://res.cloudinary.com/dxbu302v5/image/upload/v1717511044/sirw/2024-06-04_142355_fasum1.jpg',
           'https://res.cloudinary.com/dxbu302v5/image/upload/v1717511068/sirw/2024-06-04_142420_fasum2.jpg',
           'https://res.cloudinary.com/dxbu302v5/image/upload/v1717511087/sirw/2024-06-04_142439_fasum3.jpg',
           'https://res.cloudinary.com/dxbu302v5/image/upload/v1717511105/sirw/2024-06-04_142456_fasum4.jpg',
           'https://res.cloudinary.com/dxbu302v5/image/upload/v1717511125/sirw/2024-06-04_142516_fasum5.jpg',
           'https://res.cloudinary.com/dxbu302v5/image/upload/v1717511187/sirw/2024-06-04_142618_fasum6.jpg',
           'https://res.cloudinary.com/dxbu302v5/image/upload/v1717511207/sirw/2024-06-04_142638_fasum7.jpg',
           'https://res.cloudinary.com/dxbu302v5/image/upload/v1717511231/sirw/2024-06-04_142702_fasum8.jpg',
           'https://res.cloudinary.com/dxbu302v5/image/upload/v1717511307/sirw/2024-06-04_142816_fasum9.jpg',
        );
        $rt = array('1', '6', '3', '7', '4', '8', '2', '5', '1',);
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
