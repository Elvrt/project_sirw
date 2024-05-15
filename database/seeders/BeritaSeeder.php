<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = array(
            'Ketua RT dan RW Diminta Menjadi Pilar Keamanan dan Partisipasi dalam Pemilu 2024',
            'Gotong Royong Jumat Berkah Buat Saluran Drainase',
            'Sosialisi Anti Narkoba Karang Taruna',
            'Pencairan BST Masa Bayar 12-13',
            'Penerimaan Kartu Tani Tahun 2024 Tahap I',
            'Lurah Tasikmadu Minta Ketua RT-RW Jaga Keamanan Lingkungan Selama Ramadan',
        );
        $descriptions = array(
            'Dalam Pemilihan Umum (Pemilu) tahun 2024, peran ketua RT dan RW menjadi kunci penting dalam menjaga keamanan, ketertiban, serta meningkatkan partisipasi masyarakat. Keterlibatan aktif mereka (Ketua RT dan RW) diharapkan memberikan kontribusi signifikan bagi kelancaran dan kualitas pelaksanaan Pemilu. Ketua RT dan RW memiliki tanggung jawab penting dalam memastikan partisipasi pemilih di wilayahnya meningkat.',
            'Warga Kelurahan Tasikmadu RT 01 RW 05 gotong royong membuat saluran drainase di sekitar Jl. Mawar. Jumat (22/03). Hadir dalam kesempatan tersebut Ketua RT 01 dan warga RT 01 RW 05. Ketua RT 01 mengatakan, alhamdulillah kesadaran warga dalam bergotong patut kita acungi jempol, warga semangat sekali menggali untuk saluran drainase wilayah RT 01 RW 05. Terima kasih yang sebesar-besarnya kepada semua warga RT 01 RW 05 atas kegiatan gotong-royong kali ini. Kegiatan gotong royong ini bisa dijadikan contoh untuk wilayah lainya di Desa Tasikmadu.',
            'Sabtu 23 Maret 2024 Bapak Sapto Nugroho mewakilli Kepala Badan Narkotika Nasional (BNN) Kota Malang memberikan materi sosialisasi bahaya Narkoba di Kelurahan Tasikmadu. Beliau berpesan agar anak muda menjauhi narkoba karena betapa bahayanya narkoba, dan Kota Malang merupakan salah satu kabupaten yang mempunyai BNNK. Langkah awal stop Narkoba yang dilakukan oleh Pengurus Karang Taruna "Karya Bhakti" Kelurahan Tasikmadu adalah yel yel bersama semua pengurus Karang Taruna yang didampingi oleh bapak Sapto Nugroho selaku dari Dinas BNN Malang, Kades Tasikmadu bapak Basuki beserta Ibu dan bapak Chumaedi, S.H selaku unsur perwakilan dari perangkat desa.',
            'Kementerian Sosial (Kemensos) RI mencairkan Bantuan Sosial Tunai (BST) masa bayar dua bulan sekaligus yaitu 12 dan 13  kepada 2.113 Keluarga Penerima Manfaat (KPM) di Kecamatan Lowokwaru Kota Malang, Senin, (25/03/2024). Masyarakat penerima BST langsung berbondong-bondong mendatangi kantor Pos Indonesia di Jalan Sukarno Hatta sejak pagi hari, sehingga dalam sekejap kantor pos telah dipadati manusia. BST ini berasal dari Kementerian Sosial (Kemensos) yang membagikan Bansos kepada Keluarga Penerima Manfaat (KPM) di Kecamatan Lowokwaru sebesar Rp 300 ribu per KPM tiap bulan.',
            'Dalam rangka menyongsong musim tanam kedua tahun 2021, Dinas Pertanian Kendal membagikan kartu tani kepada petani dari kelompok tani Pasir Maju dan Ngudi Rejo. Acara pembagian kartu tani tersebut diselenggarakan di Balai Kelurahan Tasikmadu, Kecamatan Lowokwaru, Malang. Turut hadir dalam acara tersebut Koordinator PPL BP Kelurahan Tasikmadu, Lurah, Ketua kelompok Tani, petani, dan agen pupuk Subsidi Kelurahan Tasikmadu. Acara ini berlangsung pada hari Rabu, tanggal 27 Maret 2024.',
            'Lurah Tasikmadu meminta seluruh ketua RT dan RW di wilayahnya untuk menjaga ketertiban dan keamanan lingkungan selama Bulan Suci Ramadan 1445 Hijriah. Hal tersebut agar menciptakan suasana yang aman dan tentram selama menjalankan ibadah puasa. Lurah Tasikmadu menyampaikan imbauan tersebut secara langsung. Baik dalam bentuk pengumuman saat tarawih di wilayah Kelurahan Tasikmadu maupun melalui pesan whatsapp. Adapun imbauan yang disampaikan yakni menjaga keamanan lingkungan masing-masing dengan mengunci ganda kendaraan. Sebab selama Ramadan kerap terjadi pencurian kendaraan bermotor.',
        );
        $images = array(
            '1715782245_6644c2656a6e0.jpg',
            '1715782449_6644c33155f93.jpg',
            '1715782516_6644c3741c0cb.jpg',
            '1715782580_6644c3b466a3c.jpg',
            '1715782669_6644c40d43205.jpg',
            '1715782707_6644c4330302c.jpg',
        );
        $dates = array(
            '2024-02-14 18:02:47',
            '2024-03-22 22:19:39',
            '2024-03-23 21:34:25',
            '2024-03-25 19:42:06',
            '2024-03-27 20:26:19',
            '2024-04-01 21:09:48',
        );
        $i = 1;
        foreach ($titles as $title) {
            DB::table('berita')->insert(
                [
                    'id_berita' => $i,
                    'judul_berita' => $title,
                    'deskripsi_berita' => $descriptions[$i - 1],
                    'gambar_berita' => $images[$i - 1],
                    'tanggal_berita' => date($dates[$i - 1]),
                    'created_at' => date($dates[$i - 1]),
                ]
            );
            $i++;
        }
    }
}
