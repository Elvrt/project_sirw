<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class TataTertibSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tatibs = array(
            'Setiap warga berhak mengeluarkan pendapat baik lisan maupun tulisan kepada Pengurus RT dan RW 005.',
            'Setiap warga berhak mengikuti setiap kegiatan RT dan RW 005.',
            'Setiap warga (Kepala Keluarga) wajib memberikan data dan identitas diri kepada pengurus RT, termasuk jika ada perubahan status (datang, pindah, kelahiran, perkawinan, kematian) untuk keperluan Pendataan Kependudukan dan Catatan Sipil',
            'Setiap warga baru yang pindah ke wilayah RW.005 dalam waktu maksimal 2 x 24 jam wajib melapor kepada Ketua RT dengan membawa fotocopy E-KTP, KK atau fotocopy identitas diri lainnya dan mengisi data keluarga. Untuk selanjutnya pengurus RT melaporkan kepada Pengurus RW. 005',
            'Setiap warga (KK/Rumah) wajib membayar iuran bulanan',
            'Warga wajib mematuhi hasil rapat pengurus RT, pengurus RW dan Peraturan Tata Tertib di lingkungan RW 005.',
            'Setiap warga wajib berpartisipasi aktif dalam hal menciptakan dan menjaga keamanan, ketertiban, ketentraman, kenyamanan, kerukunan bersama, kepedulian sosial dan kebersihan lingkungan.',
            'Setiap warga berkewajiban untuk berperan aktif di lingkungan RW011 dan RT dalam masalah sosial kemasyarakatan, saling tolong menolong sesama warga di saat ada yang tertimpa musibah dan saat mendapatkan ancaman keamanan.',
            'Bagi warga yang tidak menjalankan kewajibannya dengan baik, maka pengurus RT/RW dapat untuk tidak melayani hak-hak warga tersebut sampai semua kewajibannya diselesaikan.'
        );
        $i = 1;
        foreach ($tatibs as $tatib) {
            DB::table('tata_tertib')->insert(
                [
                    'id_tatib' => $i,
                    'deskripsi_tatib' => $tatib,
                    'created_at' => now(),
                ]
            );
            $i++;
        }
    }
}
