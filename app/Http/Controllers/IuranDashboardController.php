<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use App\Models\WargaModel;
use App\Models\IuranModel;
use Illuminate\Http\Request;

class IuranDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexStatus(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $idRt = $request->query('id_rt');
        $status = $request->query('status');
        $search = $request->query('search');

        // Query the WargaModel based on the parameters
        $iuranQuery = IuranModel::query();

        if ($idRt) {
            $iuranQuery->whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
                $query->where('id_rt', $idRt);
            });
        }

        if ($status) {
            $iuranQuery->where('status_iuran', $status);
        }

        if ($search) {
            $iuranQuery->where(function ($query) use ($search) {
                $query->whereHas('kartuKeluarga.warga', function ($query) use ($search) {
                        $query->where('nama_warga', 'like', '%' . $search . '%')
                            ->where('status_hubungan', 'Kepala Keluarga');
                    })
                    ->orWhereHas('kartuKeluarga', function ($query) use ($search) {
                        $query->where('no_kk', 'like', '%' . $search . '%');
                     })
                    ->orWhere('nominal', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $iuran = $iuranQuery->orderBy('id_iuran', 'desc')->paginate($perPage);

        $rt = RtModel::all();

        return view('Dashboard.statusiuran', ['iuran' => $iuran, 'rt' => $rt, 'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
}
