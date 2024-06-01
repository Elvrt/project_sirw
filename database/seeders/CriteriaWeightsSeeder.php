<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class CriteriaWeightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = array(
            'Total Pendapatan',
            'Luas Tanah',
            'Tagihan Listrik',
            'Jumlah Tanggungan',
            'Jumlah Kendaraan',
        );
        $type = array(
            'cost', 'cost', 'cost', 'benefit', 'cost',
        );
        $weight = array(
            '0.30', '0.20', '0.15', '0.25', '0.10',
        );
        $description = array(
            'Kriteria ini cenderung menjadi kriteria cost karena menunjukkan tingkat pendapatan finansial keluarga. Semakin tinggi total pendapatan, semakin besar kemampuan finansial keluarga tersebut.',
            'Kriteria ini cenderung menjadi kriteria cost karena menunjukkan aset yang dimiliki. Semakin luas tanah yang dimiliki, semakin besar keluarga tersebut memiliki sumber daya yang cukup.',
            'Kriteria ini cenderung menjadi kriteria cost karena menunjukkan kemampuan untuk membayar tagihan listrik. Semakin rendah tagihan listrik, semakin besar kemampuan finansial keluarga tersebut.',
            'Kriteria ini cenderung menjadi kriteria benefit karena menunjukkan jumlah orang yang tergantung pada penghasilan tersebut. Semakin tinggi jumlah tanggungan, semakin besar kebutuhan untuk bantuan.',
            'Kriteria ini bisa menjadi kriteria cost. Jika memiliki banyak kendaraan menunjukkan kemampuan finansial yang baik.',
        );
        $i = 1;
        foreach ($names as $name) {
            DB::table('criteriaweights')->insert(
                [
                    'id' => $i,
                    'name' => $name,
                    'type' => $type[$i - 1],
                    'weight' => $weight[$i - 1],
                    'description' => $description[$i - 1],
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
            $i++;
        }
    }
}
