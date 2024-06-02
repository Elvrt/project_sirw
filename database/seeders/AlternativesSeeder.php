<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class AlternativesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $no_kk = array(
            '3573051012845130',
            '3573051012000004',
            '3573051012000006',
            '3573051012000008',
            '3573051012000010',
            '3573051012000012',
            '3573051012000014',
            '3573051012000016',
            '3573051012813354',
            '3573051012110884',
        );
        $kepalas = array(
            'Heryanto Latupono',
            'Albyan Agung',
            'Avicenna Mumtaza',
            'Denny Malik',
            'Ferdi Riansyah',
            'Muhammad Bagus',
            'Ricky Putra',
            'Achmad Syahrul',
            'Jagaraga Wasita',
            'Radit Prasetya',
        );
        $i = 1;
        foreach ($kepalas as $kepala) {
            DB::table('alternatives')->insert(
                [
                    'id' => $i,
                    'no_kk' => $no_kk[$i - 1],
                    'kepala_keluarga' => $kepala,
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
            $i++;
        }
    }
}
