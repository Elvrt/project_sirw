<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluargaModel;
use App\Models\WargaModel;
use App\Models\PersuratanModel;
use App\Models\PengaduanModel;
use App\Models\IuranModel;
use Illuminate\Http\Request;

class AuthRtController extends Controller
{
    public function index()
    {
        $idRt = auth()->user()->warga->kartuKeluarga->rt->id_rt;

        $kkCount = KartuKeluargaModel::whereHas('rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->count();
        $wargaCount = WargaModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->count();
        $suratCount = PersuratanModel::whereHas('warga.kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->count();
        $pengaduanCount = PengaduanModel::whereHas('warga.kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->count();

        $lakiCount = WargaModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->where('jenis_kelamin', 'L')->count();
        $perempuanCount = WargaModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->where('jenis_kelamin', 'P')->count();


        $sumIuran = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->sum('nominal');
        $sumIuranJan = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 1)->sum('nominal');
        $sumIuranFeb = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 2)->sum('nominal');
        $sumIuranMar = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 3)->sum('nominal');
        $sumIuranApr = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 4)->sum('nominal');
        $sumIuranMay = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 5)->sum('nominal');
        $sumIuranJun = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 6)->sum('nominal');
        $sumIuranJul = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 7)->sum('nominal');
        $sumIuranAug = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 8)->sum('nominal');
        $sumIuranSep = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 9)->sum('nominal');
        $sumIuranOct = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 10)->sum('nominal');
        $sumIuranNov = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 11)->sum('nominal');
        $sumIuranDec = IuranModel::whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        })->whereYear('tanggal_iuran', 2024)->whereMonth('tanggal_iuran', 12)->sum('nominal');
        return view(
            'RT.index',
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
