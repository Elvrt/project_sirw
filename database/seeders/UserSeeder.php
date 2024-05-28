<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = 1;
        $id = array('3', '1', '5', '9', '13', '17', '21', '25', '29',);
        $role = array(
            '9', '1', '2', '3', '4', '5', '6', '7', '8',
        );
        $username = array(
            'rwaa', 'rt1a', 'rt2a', 'rt3a', 'rt4a', 'rt5a', 'rt6a', 'rt7a', 'rt8a',
        );
        foreach ($username as $user) {
            DB::table('user')->insert(
                [
                    'id_user' => $i,
                    'id_role' => $role[$i - 1],
                    'id_warga' => $id[$i - 1],
                    'username' => $user,
                    'password' => Hash::make('12345678'),
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
            $i++;
        }
    }
}
