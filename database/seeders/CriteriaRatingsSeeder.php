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
            '< Rp1.000.000', 'Rp1.000.000 - Rp2.000.000', 'Rp2.000.001 - Rp3.000.000', 'Rp3.000.001 - Rp4.000.000', '> Rp4.000.000',
            '0', '1 orang', '2 - 3 orang', '4 - 5 orang ', '> 5 orang',
            '< 30 m persegi', '30 - 50 m persegi', '51 - 70 m persegi', '71 - 90 m persegi', '> 90 m persegi',
            '0', '1 kendaraan', '2 kendaraan', '3 kendaraann', '> 3 kendaraan',
            '< 450 VA', '450 - 900 VA', '901 - 1300 VA', '1301 - 2200 VA', '> 2200 VA',
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
