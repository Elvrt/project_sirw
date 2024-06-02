<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluargaModel;
use App\Models\WargaModel;
use App\Models\PersuratanModel;
use App\Models\PengaduanModel;
use App\Models\IuranModel;
use Illuminate\Http\Request;

class AuthRwController extends Controller
{
    public function index()
    {
        $kkCount = KartuKeluargaModel::count();
        $wargaCount = WargaModel::count();
        $suratCount = PersuratanModel::count();
        $pengaduanCount = PengaduanModel::count();

        $lakiCount = WargaModel::where('jenis_kelamin', 'L')->count();
        $perempuanCount = WargaModel::where('jenis_kelamin', 'P')->count();

        $sumIuran = IuranModel::whereYear('tanggal_iuran', 2024)->sum('nominal');
        $sumIuranJan = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 1)->sum('nominal');
        $sumIuranFeb = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 2)->sum('nominal');
        $sumIuranMar = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 3)->sum('nominal');
        $sumIuranApr = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 4)->sum('nominal');
        $sumIuranMay = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 5)->sum('nominal');
        $sumIuranJun = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 6)->sum('nominal');
        $sumIuranJul = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 7)->sum('nominal');
        $sumIuranAug = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 8)->sum('nominal');
        $sumIuranSep = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 9)->sum('nominal');
        $sumIuranOct = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 10)->sum('nominal');
        $sumIuranNov = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 11)->sum('nominal');
        $sumIuranDec = IuranModel::whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 12)->sum('nominal');
        return view(
            'RW.index',
            [
                'kkCount' => $kkCount,
                'wargaCount' => $wargaCount,
                'suratCount' => $suratCount,
                'pengaduanCount' => $pengaduanCount,
                'lakiCount' => $lakiCount,
                'perempuanCount' => $perempuanCount,
                'sumIuran' => $sumIuran,
                'sumIuranJan' => $sumIuranJan,
                'sumIuranFeb' => $sumIuranFeb,
                'sumIuranMar' => $sumIuranMar,
                'sumIuranApr' => $sumIuranApr,
                'sumIuranMay' => $sumIuranMay,
                'sumIuranJun' => $sumIuranJun,
                'sumIuranJul' => $sumIuranJul,
                'sumIuranAug' => $sumIuranAug,
                'sumIuranSep' => $sumIuranSep,
                'sumIuranOct' => $sumIuranOct,
                'sumIuranNov' => $sumIuranNov,
                'sumIuranDec' => $sumIuranDec,
            ]
        );
    }
}
