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
        $id = array('11', '2', '8', '24', '10', '15', '30', '27', '19', '15', '20',);
        $titles = array(
            'Pohon Tumbang di Jalan Mataram',
            'Sampah Menumpuk di Jalan Atletik',
            'Jalan Berlubang di Jalan Renang',
            'Lampu Lalu Lintas Rusak di Jalan Taruna',
            'Saluran Air Tersumbat di Jalan Brawijaya',
            'Kebocoran Gas di Jalan Sudirman',
            'Pagar Roboh di Jalan Kaktus',
            'Tiang Listrik Miring di Jalan Wayang',
            'Kerusakan Trotoar di Jalan Werkudara',
            'Lampu Jalan Mati di Jalan Diponegoro',
            'Kebocoran Pipa Air di Jalan Puntadewa',
        );
        $description = array(
            'Ada pohon tumbang di Jalan Mataram yang menghalangi lalu lintas kendaraan dan pejalan kaki. Mohon untuk segera ditangani agar tidak menimbulkan bahaya bagi warga sekitar.',
            'Sampah menumpuk di Jalan Atletik selama beberapa hari terakhir dan belum diangkut. Mohon bantuan untuk membersihkan agar lingkungan tetap bersih dan sehat.',
            'Jalan berlubang di Jalan Renang menyebabkan kecelakaan lalu lintas. Mohon untuk segera diperbaiki agar tidak menimbulkan korban lagi.',
            'Lampu lalu lintas di persimpangan Jalan Taruna tidak berfungsi dengan baik, menyebabkan kebingungan dan kemacetan. Mohon segera diperbaiki.',
            'Saluran air tersumbat di Jalan Brawijaya menyebabkan banjir saat hujan. Mohon untuk segera dibersihkan agar aliran air lancar.',
            'Ada kebocoran gas di Jalan Sudirman yang tercium oleh warga sekitar. Mohon untuk segera ditangani untuk menghindari bahaya kebakaran.',
            'Pagar roboh di Jalan Kaktus menghalangi akses jalan. Mohon untuk segera diperbaiki agar lalu lintas kembali lancar.',
            'Tiang listrik di Jalan Wayang miring dan berpotensi tumbang. Mohon untuk segera diperbaiki agar tidak membahayakan warga.',
            'Kerusakan trotoar di Jalan Werkudara menyebabkan pejalan kaki kesulitan. Mohon untuk segera diperbaiki agar pejalan kaki dapat melintas dengan aman.',
            'Beberapa lampu jalan di Jalan Diponegoro tidak menyala sejak beberapa hari yang lalu, menyebabkan area tersebut gelap dan membahayakan keamanan warga. Mohon perbaikan segera.',
            'Terdapat kebocoran pipa air di Jalan Puntadewa yang telah menyebabkan genangan air di sekitar area tersebut. Mohon untuk segera diperbaiki agar tidak mengganggu aktivitas warga.',
        );
        $status = array('Selesai', 'Selesai', 'Selesai', 'Ditolak', 'Selesai', 'Selesai', 'Ditolak', 'Selesai', 'Selesai', 'Menunggu', 'Menunggu',);
        $catatan = array(
            'Pohon sudah dipinggirkan',
            'Sampah sudah diangkut oleh dinas kebersihan',
            'Jalan sudah diperbaiki oleh dinas terkait',
            'Lampu lalu lintas masih menyala, tidak perlu perbaikan',
            'Saluran air sudah dibersihkan dan normal kembali',
            'Kebocoran gas sudah diatasi oleh tim gas',
            'Setelah dicek tidak ada pagar yang roboh',
            'Tiang listrik sudah diperbaiki oleh PLN',
            'Trotoar sudah diperbaiki dan aman untuk dilintasi',
            'Sudah koordinasi dengan PLN, akan segera diperbaiki',
            'Sudah diatasi oleh PDAM setempat',
        );
        $images = array(
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172640/sirw/2024-06-12_061003_pengaduan1.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172666/sirw/2024-06-12_061029_pengaduan2.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172698/sirw/2024-06-12_061102_pengaduan3.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172722/sirw/2024-06-12_061126_pengaduan4.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172739/sirw/2024-06-12_061143_pengaduan5.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172758/sirw/2024-06-12_061202_pengaduan6.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172784/sirw/2024-06-12_061227_pengaduan7.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172820/sirw/2024-06-12_061304_pengaduan8.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172854/sirw/2024-06-12_061338_pengaduan9.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172873/sirw/2024-06-12_061357_pengaduan10.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1718172906/sirw/2024-06-12_061430_pengaduan11.jpg',
        );
        $dates = array(
            '2024-02-14 18:02:47',
            '2024-03-22 22:19:39',
            '2024-03-23 21:34:25',
            '2024-04-01 10:15:00',
            '2024-04-15 12:30:00',
            '2024-04-20 16:10:20',
            '2024-05-09 09:05:15',
            '2024-05-12 18:45:35',
            '2024-05-26 20:20:25',
            '2024-06-07 09:45:27',
            '2024-06-11 08:20:50',
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
                    'gambar_pengaduan' => $images[$i - 1],
                    'tanggal_pengaduan' => $dates[$i - 1],
                    'created_at' => $dates[$i - 1],
                ]
            );
            $i++;
        }
    }
}
