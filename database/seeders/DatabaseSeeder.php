<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // LevelSeeder::class,
            // StrukturRwSeeder::class,
            // LayananDaruratSeeder::class,
            // RtSeeder::class,
            // KartuKeluargaSeeder::class,
            TataTertibSeeder::class,
        ]);
    }
}
