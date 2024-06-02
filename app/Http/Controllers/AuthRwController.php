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

        return view(
            'RW.index',
            [
                'kkCount' => $kkCount,
                'wargaCount' => $wargaCount,
                'suratCount' => $suratCount,
                'pengaduanCount' => $pengaduanCount,
                'lakiCount' => $lakiCount,
                'perempuanCount' => $perempuanCount,
            ]
        );
    }
}
