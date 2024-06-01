<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class CriteriaRatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $criteria_id = array(
            '1', '1', '1', '1', '1',
            '2', '2', '2', '2', '2',
            '3', '3', '3', '3', '3',
            '4', '4', '4', '4', '4',
            '5', '5', '5', '5', '5',
        );
        $rating = array(
            '1', '2', '3', '4', '5',
            '1', '2', '3', '4', '5',
            '1', '2', '3', '4', '5',
            '1', '2', '3', '4', '5',
            '1', '2', '3', '4', '5',
        );
        $description = array(
            '< Rp200.000', 'Rp200.000 <= x < Rp500.000', 'Rp500.000 <= x < Rp1.000.000', 'Rp1.000.000 <= x < Rp2.000.000', '>= Rp2.000.000',
            '< 10 m persegi', '10 m persegi <= x < 15 m persegi', '15 m persegi <= x < 20 m persegi', '20 m persegi <= x < 30 m persegi', '>= 30 m persegi',
            '< Rp100.000', 'Rp100.000 <= x < Rp200.000', 'Rp200.000 <= x < Rp500.000', 'Rp500.000 <= x < Rp1.000.000', '>= Rp1.000.000',
            'Tidak ada', '1 orang', '2 orang', '3 orang <= x 5 orang', '> 5 orang',
            'Tidak ada', '1 kendaraan', '2 kendaraan', '3 kendaraan <= x < 5 kendaraan', '> 5 kendaraan',
        );
        $i = 1;
        foreach ($criteria_id as $id) {
            DB::table('criteriaratings')->insert(
                [
                    'id' => $i,
                    'criteria_id' => $id,
                    'rating' => $rating[$i - 1],
                    'description' => $description[$i - 1],
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
            $i++;
        }
    }
}
