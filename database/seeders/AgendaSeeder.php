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
            'Posyandu Lansia',
            'Lomba Mural',
            'Pemotongan Hewan Kurban',

        );
        $descriptions = array(
            'Pelaksanaan Pemilihan Umum Serentak tahun 2024 di mana warga akan memberikan suara mereka untuk memilih Capres dan Caleg di tingkat nasional, provinsi, dan kabupaten/kota.',
            'Kegiatan rutin untuk memantau pertumbuhan dan perkembangan balita di lingkungan setempat. Posyandu juga memberikan layanan kesehatan dasar dan penyuluhan kepada orang tua tentang perawatan balita.',
            'Upacara atau ritual tradisional di mana warga berkumpul untuk menghormati leluhur atau roh-roh nenek moyang yang telah meninggal. Kegiatan ini dilakukan sebagai bentuk penghormatan terhadap leluhur dan untuk mempererat hubungan antarwarga.',
            'Kegiatan gotong royong yang dilakukan warga untuk membersihkan masjid, sebagai persiapan menyambut bulan suci Ramadhan. Tujuannya adalah menciptakan lingkungan masjid yang bersih dan nyaman bagi ibadah.',
            'Pembagian Bantuan Langsung Tunai (BLT) pada periode kedua kepada warga yang membutuhkan. BLT diberikan sebagai bantuan sosial untuk membantu meringankan beban ekonomi warga selama masa sulit.',
            'Kegiatan yang dilakukan menjelang Idul Fitri di mana warga berkumpul untuk mengumandangkan takbir secara berkeliling di sekitar lingkungan, sebagai ungkapan kegembiraan menyambut Hari Raya Idul Fitri.Pembagian Bantuan Langsung Tunai (BLT) pada periode kedua kepada warga yang membutuhkan. BLT diberikan sebagai bantuan sosial untuk membantu meringankan beban ekonomi warga selama masa sulit.',
            'Agenda posyandu lansia merupakan kegiatan rutin yang diselenggarakan untuk memantau dan meningkatkan kesehatan para lanjut usia melalui pemeriksaan medis, penyuluhan kesehatan, serta aktivitas fisik. Program ini bertujuan untuk memastikan kesejahteraan lansia dengan memberikan pelayanan kesehatan terpadu dan dukungan sosial yang berkesinambungan.',
            'Agenda lomba mural adalah kegiatan kreatif yang mengajak warga untuk mengekspresikan bakat seni mereka melalui lukisan dinding dengan tema tertentu. Acara ini bertujuan untuk memperindah lingkungan sekitar sekaligus memupuk semangat berkarya dan kolaborasi antar warga.',
            'Agenda pemotongan hewan kurban adalah kegiatan rutin yang dilaksanakan pada hari raya Idul Adha untuk menyembelih hewan kurban sebagai wujud ketaatan dan kepedulian sosial. Daging kurban kemudian dibagikan kepada masyarakat yang membutuhkan, memperkuat semangat solidaritas dan kebersamaan.',
        );
        $images = array(
            '1715778009_6644b1d9a501b.jpg',
            '1715778029_6644b1edc1f29.jpg',
            '1715778090_6644b22ab69a9.jpg',
            '1715778105_6644b2394f966.jpg',
            '1715778173_6644b27d65464.jpg',
            '1715778235_6644b2bb2ee74.jpg',
            '1716550054_665079a6b11ea.jpg',
            '1716550137_665079f94cce9.jpg',
            '1716550325_66507ab528d85.jpg',
        );
        $dates = array(
            '2024-02-14 07:00:00',
            '2024-03-04 08:00:00',
            '2024-03-09 09:30:00',
            '2024-03-10 07:30:00',
            '2024-04-01 10:00:00',
            '2024-04-10 18:00:00',
            '2024-05-14 08:00:00',
            '2024-05-26 09:00:00',
            '2024-06-17 07:00:00',
        );
        $i = 1;
        foreach ($titles as $title) {
            DB::table('agenda')->insert(
                [
                    'id_agenda' => $i,
                    'judul_agenda' => $title,
                    'deskripsi_agenda' => $descriptions[$i - 1],
                    'gambar_agenda' => $images[$i - 1],
                    'tanggal_agenda' => date($dates[$i - 1]),
                    'created_at' => date($dates[$i - 1]),
                ]
            );
            $i++;
        }
    }
}
