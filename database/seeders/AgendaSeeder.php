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
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1717508956/sirw/2024-06-04_134907_agenda1.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1717508974/sirw/2024-06-04_134925_agenda2.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1717509003/sirw/2024-06-04_134954_agenda3.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1717509023/sirw/2024-06-04_135015_agenda4.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1717509057/sirw/2024-06-04_135048_agenda5.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1717509220/sirw/2024-06-04_135332_agenda6.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1717509236/sirw/2024-06-04_135347_agenda7.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1717509277/sirw/2024-06-04_135429_agenda8.jpg',
            'https://res.cloudinary.com/dxbu302v5/image/upload/v1717509294/sirw/2024-06-04_135446_agenda9.jpg',
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
