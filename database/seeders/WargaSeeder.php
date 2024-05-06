<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = array(
            'Athallah Adjani', 'Nafiul Alam', 'Nizar Kharizmi', 'Elvaretta Salsabilla', 'Afrizal Dwi', 'Octa Nurhafifah', 'Ahmad Aria', 'Albyan Agung', 'Armand Maulana','Ana Bellatus',
            'Avicenna Mumtaza', 'Byan Nur', 'Daffa Maulana', 'Daffa Yudisa', 'Denny Malik', 'Dea Putri', 'Doni Wahyu', 'Fanessabhirawaning', 'Ferdi Riansyah', 'Ihza Nurkhafidh',
            'Krisna Andika', 'Jihan Karunia', 'Muhammad Bagus', 'Muhammad Ridlo', 'Raffy Jamil', 'Nadila Amalia', 'Ricky Putra', 'Putri Norchasana', 'Stefanus Ageng', 'Thoriq Fathurrozi',
            'Achmad Syahrul', 'Ahmad Khoirul',
        );
        $jk = array('L', 'L', 'L', 'P', 'L', 'P', 'L', 'L', 'L', 'P', 'L', 'L', 'L', 'L', 'L', 'P', 'L', 'P', 'L', 'L', 'L', 'P', 'L', 'L', 'L', 'P', 'L', 'P', 'L', 'L', 'L', 'L',);
        $place = array('Malang', 'Mojokerto', 'Pasuruan', 'Sidoarjo', 'Surabaya', 'Gresik', 'Bojonegoro', 'Tuban', 'Lamongan', 'Kediri',);
        $date = array(
            '950121', '950221', '950321', '950421', '950521', '950621', '950721', '950821', '950921', '951021',
            '960101', '960201', '960301', '960401', '960501', '960601', '960701', '960801', '960901', '961001',
            '970101', '970201', '970301', '970401', '970501', '970601', '970701', '970801', '970901', '971001',
            '980101', '980201',
        );
        $address = array('Jl. Mawar No. ', 'Jl. Renang No. ', 'Jl. Mataram No. ', 'Jl. Diponegoro No. ', ' Jl. Puntadewa No. ', 'Jl. Pelita No. ', 'Jl. Angklung No. ', 'Jl. Kaktus No. ');
        $nomor = array(
            '081222333444', '081222333555', '081222333666', '081222333777', '081222333888', '081222333999', '081222333000', '089777666555', '089777666444', '089777666333',
            '083555333444', '085999333555', '083999333666', '083222333777', '083111333888', '082111333999', '082666333000', '081222666555', '081111666444', '081000666333',
            '084555333444', '084999333555', '084999333666', '084222333777', '084111333888', '084111333999', '084666333000', '084222666555', '084111666444', '084000666333',
            '089555333444', '089999333555',
        );
        $jobTitle = array('PNS', 'Guru', 'Dokter', 'Pengacara', 'Pilot', 'Petani', 'Polisi', 'Chef', 'Programmer', 'Fotografer');
        $income = array('3400000', '2600000', '7900000', '5200000', '10400000', '1200000', '2400000', '4900000', '6300000', '3700000');
        $status = array('Kepala Keluarga', 'Anggota');
        $i = 1; $k = 1; $a = 0; $no = 1; $b = 1; $s = 1;
        foreach ($names as $name) {
            $reversed_date = substr($date[$i - 1], 4, 2) . substr($date[$i - 1], 2, 2) . substr($date[$i - 1], 0, 2);
            DB::table('warga')->insert(
                [
                    'id_warga' => $i,
                    'id_kk' => $k,
                    'nik' => '357305' . $reversed_date . '0001',
                    'nama_warga' => $name,
                    'jenis_kelamin' => $jk[$i - 1],
                    'tempat_lahir' => $place[$b - 1],
                    'tanggal_lahir' => date($date[$i - 1]),
                    'alamat' => $address[$a] . $no,
                    'nomor_telepon' => $nomor[$i - 1],
                    'agama' => 'Islam',
                    'pekerjaan' => $jobTitle[$b - 1],
                    'penghasilan' => $income[$b - 1],
                    'status_hubungan' => $status[$s - 1],
                    'created_at' => now()->setTimezone('Asia/Jakarta'),
                ]
            );
            if ($b % 10 == 0) {
                $b = 0;
            }
            if ($s % 2 == 0) {
                $s = 0;
            }if ($i % 4 == 0) {
                $a++;
                $no = 0;
            }
            if ($i % 2 == 0) {
                $k++;
                $no++;
            }
            $i++;
            $b++;
            $s++;
        }
    }
}
