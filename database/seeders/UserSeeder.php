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
        $role = array(
            '1', '10', '9', '10', '2', '10', '10', '10', '3', '10',
            '10', '10', '4', '10', '10', '10', '5', '10', '10', '10',
            '6', '10', '10', '10', '7', '10', '10', '10', '8', '10',
        );
        $username = array(
            'rt1a', 'nafiul', 'rwaa', 'elva', 'rt2a', 'octa', 'aria', 'albyan', 'rt3a', 'anabel',
            'avicenna', 'byan', 'rt4a', 'daffay', 'denny', 'deaputri', 'rt5a', 'fanes', 'ferdi', 'ihza',
            'rt6a', 'jihan', 'bagus', 'ridlo', 'rt7a', 'nadila', 'ricky', 'putri', 'rt8a', 'thoriq',
        );
        foreach ($username as $user) {
            DB::table('user')->insert(
                [
                    'id_user' => $i,
                    'id_role' => $role[$i - 1],
                    'id_warga' => $i,
                    'username' => $user,
                    'password' => Hash::make('12345678'),
                    'created_at' => now(),
                ]
            );
            $i++;
        }
    }
}
