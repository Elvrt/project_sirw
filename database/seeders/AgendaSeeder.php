<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = array(
            'Pemilu Serentak 2024',
            'Posyandu Balita',
            'Kegiatan Ruwah Desa',
            'Gotong Royong Membersihkan Masjid',
            'Pembagian BLT Periode 2',
            'Takbir Keliling',
        );
        $descriptions = array(
            'Pelaksanaan Pemilihan Umum Serentak tahun 2024 di mana warga akan memberikan suara mereka untuk memilih Capres dan Caleg di tingkat nasional, provinsi, dan kabupaten/kota.',
            'Kegiatan rutin untuk memantau pertumbuhan dan perkembangan balita di lingkungan setempat. Posyandu juga memberikan layanan kesehatan dasar dan penyuluhan kepada orang tua tentang perawatan balita.',
            'Upacara atau ritual tradisional di mana warga berkumpul untuk menghormati leluhur atau roh-roh nenek moyang yang telah meninggal. Kegiatan ini dilakukan sebagai bentuk penghormatan terhadap leluhur dan untuk mempererat hubungan antarwarga.',
            'Kegiatan gotong royong yang dilakukan warga untuk membersihkan masjid, sebagai persiapan menyambut bulan suci Ramadhan. Tujuannya adalah menciptakan lingkungan masjid yang bersih dan nyaman bagi ibadah.',
            'Pembagian Bantuan Langsung Tunai (BLT) pada periode kedua kepada warga yang membutuhkan. BLT diberikan sebagai bantuan sosial untuk membantu meringankan beban ekonomi warga selama masa sulit.',
            'Kegiatan yang dilakukan menjelang Idul Fitri di mana warga berkumpul untuk mengumandangkan takbir secara berkeliling di sekitar lingkungan, sebagai ungkapan kegembiraan menyambut Hari Raya Idul Fitri.Pembagian Bantuan Langsung Tunai (BLT) pada periode kedua kepada warga yang membutuhkan. BLT diberikan sebagai bantuan sosial untuk membantu meringankan beban ekonomi warga selama masa sulit.',
        );
        $dates = array(
            '2024-02-14 07:00:00',
            '2024-03-04 08:00:00',
            '2024-03-09 09:30:00',
            '2024-03-10 07:30:00',
            '2024-04-01 10:00:00',
            '2024-04-10 18:00:00',
        );
        $i = 1;
        foreach ($titles as $title) {
            DB::table('agenda')->insert(
                [
                    'id_agenda' => $i,
                    'judul_agenda' => $title,
                    'deskripsi_agenda' => $descriptions[$i - 1],
                    'gambar_agenda' => null,
                    'tanggal_agenda' => date($dates[$i - 1]),
                    'created_at' => date($dates[$i - 1]),
                ]
            );
            $i++;
        }
    }
}
