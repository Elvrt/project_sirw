<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class LayananDaruratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = array(
            'Ambulans', 'Pemadam Kebakaran', 'Basarnas', 'PLN/Listrik', 'Posko Bencana Alam',
            'Polisi', 'Panggilan Darurat', 'PMI', 'Sentra Informasi Keracunan BPOM', 'Posko Kewaspadaan Nasional',
            'Jasa Marga', 'BBM Pertamina',
        );
        $nomor = array(
            '118/119', '113', '115', '123', '129',
            '110', '112', '021-7992325', '1500-533', '122',
            '14080', '135',
        );
        $i = 1;
        foreach ($names as $name) {
            DB::table('layanan_darurat')->insert(
                [
                    'id_layanan' => $i,
                    'nama_layanan' => $name,
                    'nomor_layanan' => $nomor[$i - 1],
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
            $i++;
        }
    }
}
