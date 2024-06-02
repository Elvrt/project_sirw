<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class AlternativesCoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alternative_id = array(
            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10',
        );
        $criteria_id = array(
            '1', '2', '3', '4', '5',
        );
        $i = 1;
        for ($j = 1; $j <= 10; $j++) {
            for ($k = 1; $k <=5; $k++) {
                if ($k == 1) {
                    $rating_id = mt_rand(1, 5);
                } elseif ($k == 2) {
                    $rating_id = mt_rand(6, 10);
                } elseif ($k == 3) {
                    $rating_id = mt_rand(11, 15);
                } elseif ($k == 4) {
                    $rating_id = mt_rand(16, 20);
                } elseif ($k == 5) {
                    $rating_id = mt_rand(21, 25);
                }
                DB::table('alternativescores')->insert(
                    [
                        'id' => $i,
                        'alternative_id' => $alternative_id[$j - 1],
                        'criteria_id' => $criteria_id[$k - 1],
                        'rating_id' => $rating_id,
                        'created_at' => now()->setTimezone('Asia/Jakarta'),
                    ]
                );
                $i++;
            }
        }
    }
}
