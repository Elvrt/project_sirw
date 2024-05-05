<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $codes = array('RT1A','RT2A','RT3A', 'RT4A', 'RT5A', 'RT6A', 'RT7A', 'RT8A','RWA', 'WRG',);
        $names = array('RT1 Admin', 'RT2 Admin', 'RT3 Admin', 'RT4 Admin', 'RT5 Admin', 'RT6 Admin', 'RT7 Admin', 'RT8 Admin', 'RW Admin', 'Warga',);
        $i = 1;
        foreach ($codes as $code) {
            DB::table('role')->insert(
                [
                    'id_role' => $i,
                    'kode_role' => $code,
                    'nama_role' => $names[$i - 1],
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
            $i++;
        }
    }
}
