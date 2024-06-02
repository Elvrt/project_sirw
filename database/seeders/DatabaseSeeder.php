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
            RwSeeder::class,
            RtSeeder::class,
            TataTertibSeeder::class,
            LayananDaruratSeeder::class,
            KartuKeluargaSeeder::class,
            BeritaSeeder::class,
            AgendaSeeder::class,
            FasilitasUmumSeeder::class,
            RoleSeeder::class,
            IuranSeeder::class,
            WargaSeeder::class,
            UserSeeder::class,
            StrukturRwSeeder::class,
            PengaduanSeeder::class,
            PersuratanSeeder::class,
            SktmSeeder::class,
            AlternativesSeeder::class,
            CriteriaWeightsSeeder::class,
            CriteriaRatingsSeeder::class,
            AlternativesCoresSeeder::class,
        ]);
    }
}
