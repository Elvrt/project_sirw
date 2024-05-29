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
            'Athallah Adjani', 'Fifi Shofi', 'Nafiul Alam', 'Elvaretta Salsabilla', 'Afrizal Dwi', 'Octa Nurhafifah', 'Albyan Agung', 'Nadinda Viscita', 'Armand Maulana','Ana Bellatus',
            'Avicenna Mumtaza', 'Laili Nur', 'Daffa Yudisa', 'Ain Nur', 'Denny Malik', 'Dea Putri', 'Doni Wahyu', 'Fanessabhirawaning', 'Ferdi Riansyah', 'Ayunda Fitri',
            'Krisna Andika', 'Jihan Karunia', 'Muhammad Bagus', 'Anggie Nirmala', 'Raffy Jamil', 'Nadila Amalia', 'Ricky Putra', 'Putri Norchasana', 'Stefanus Ageng', 'Icha Khotijah',
            'Achmad Syahrul', 'Ayu Ambarawati',
        );
        $names2 = array(
            'Ahmad Aria', 'Putri Novita', 'Nizar Khawarizmi', 'Dian Kristina', 'Yulanda Putra', 'Amelia Belinda', 'Herdian Sefa', 'Irma Alfiana', 'Adi Eko', 'Cintika Lismia',
            'Muhammad Mukhlis', 'Soibatul Islamiyah', 'Muhammad Jarot', 'Dwi Erna', 'Muhammad Ananda', 'Vanesya Della', 'Muhammad Ramadhani', 'Zaro Watul', 'Muhammad Rizal', 'Rieke Dina',
            'Muhammad Alfanul', 'Sheva Eka', 'Dony Bagas', 'Nur Alisyatul', 'Dimas Pramudia', 'Natasya Adelia', 'Dwisma Sandiawan', 'Nabila Alin', 'Dian Sumbaga', 'Lyra Yasmine',
            'Dany Kristiawan', 'Iin Indayanti',
        );
        // $names3 = array(
        //     'Deva Firnanda', 'Hilyah Aulia', 'Feby Adelia', 'Erica Putri', 'Chaidar Danial', 'Elin Dwi', 'Tatha Amelia', 'Trias Politica',
        // );
        $jk = array('L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P',);
        $place = array('Malang', 'Mojokerto', 'Pasuruan', 'Sidoarjo', 'Surabaya', 'Gresik', 'Bojonegoro', 'Tuban', 'Lamongan', 'Kediri',);
        $date = array(
            '950121', '950221', '950321', '950421', '950521', '950621', '950721', '950821', '950921', '951021',
            '960101', '960201', '960301', '960401', '960501', '960601', '960701', '960801', '960901', '961001',
            '970101', '970201', '970301', '970401', '970501', '970601', '970701', '970801', '970901', '971001',
            '940101', '940201',
        );
        $date2 = array(
            '050117', '050212', '050309', '050402', '050501', '050618', '050722', '050813', '050920', '051026',
            '060103', '060225', '060319', '060423', '060513', '060616', '060718', '060812', '060926', '061019',
            '070124', '070217', '070308', '070403', '070525', '070603', '070725', '070812', '070919', '071006',
            '050101', '050203',
        );
        // $date3 = array(
        //     '050117', '050212', '050309', '050402', '050501', '050618', '050722', '050813',
        // );
        $address = array('Jl. Mawar No. ', 'Jl. Renang No. ', 'Jl. Mataram No. ', 'Jl. Diponegoro No. ', ' Jl. Puntadewa No. ', 'Jl. Pelita No. ', 'Jl. Angklung No. ', 'Jl. Kaktus No. ');
        $nomor = array(
            '08122333444', '081222333555', '081222333666', '081222333777', '081222333888', '081222333999', '081222333000', '089777666555', '089777666444', '089777666333',
            '083555333444', '085999333555', '083999333666', '083222333777', '083111333888', '082111333999', '082666333000', '081222666555', '081111666444', '081000666333',
            '084555333444', '084999333555', '084999333666', '084222333777', '084111333888', '084111333999', '084666333000', '084222666555', '084111666444', '084000666333',
            '089555333444', '089999333555',
        );
        $nomor2 = array(
            '081022333444', '081022333555', '081022333666', '081022333777', '081022333888', '081022333999', '081022333000', '089077666555', '089077666444', '089077666333',
            '083055333444', '085099333555', '083099333666', '083022333777', '083011333888', '082011333999', '082066333000', '081022666555', '081011666444', '081900666333',
            '084055333444', '084099333555', '084099333666', '084022333777', '084011333888', '084011333999', '084066333000', '084022666555', '084011666444', '084900666333',
            '089055333444', '089099333555',
        );
        $agama = array(
            'Islam', 'Islam', 'Kristen Katolik', 'Kristen Katolik', 'Kristen Protestan', 'Kristen Protestan', 'Hindu', 'Hindu', 'Budha', 'Budha',
            'Konghucu', 'Konghucu', 'Islam', 'Islam', 'Kristen Katolik', 'Kristen Katolik', 'Kristen Protestan', 'Kristen Protestan', 'Hindu', 'Hindu',
            'Budha', 'Budha', 'Konghucu', 'Konghucu', 'Islam', 'Islam', 'Kristen Katolik', 'Kristen Katolik', 'Kristen Protestan', 'Kristen Protestan',
            'Hindu', 'Hindu',
        );
        $jobTitle = array('PNS', 'Guru', 'Dokter', 'Pengacara', 'Kuli Bangunan', 'Petani', 'Polisi', 'Chef', 'Programmer', 'Fotografer');
        $income = array('3400000', '2600000', '7900000', '5200000', '1100000', '1200000', '2400000', '3900000', '6300000', '3700000');
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
                    'agama' =>  $agama[$i - 1],
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
        $j = 1; $k = 1; $a = 0; $no = 1; $b = 1;
        foreach ($names2 as $name) {
            $reversed_date2 = substr($date2[$j - 1], 4, 2) . substr($date2[$j - 1], 2, 2) . substr($date2[$j - 1], 0, 2);
            DB::table('warga')->insert(
                [
                    'id_warga' => $i,
                    'id_kk' => $k,
                    'nik' => '357305' . $reversed_date2 . '0001',
                    'nama_warga' => $name,
                    'jenis_kelamin' => $jk[$j - 1],
                    'tempat_lahir' => $place[$b - 1],
                    'tanggal_lahir' => date($date2[$j - 1]),
                    'alamat' => $address[$a] . $no,
                    'nomor_telepon' => $nomor2[$j - 1],
                    'agama' =>  $agama[$j - 1],
                    'pekerjaan' => 'Mahasiswa',
                    'penghasilan' => 0,
                    'status_hubungan' => 'Anggota',
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
            $j++;
            $b++;
            $s++;
        }

    }
}
