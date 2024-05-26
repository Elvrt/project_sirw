<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use App\Models\WargaModel;
use App\Models\PersuratanModel;
use Illuminate\Http\Request;

class PersuratanDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.pengajuansurat');
    }

    public function indexPilihRequest()
    {
        return view('Dashboard.pilihrequestsurat');
    }

    public function indexPilihStatus()
    {
        return view('Dashboard.pilihstatussurat');
    }

    public function indexStatus(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $status = $request->query('status');
        $search = $request->query('search');

        // Query the WargaModel based on the parameters
        $persuratanQuery = PersuratanModel::query();

        if ($status) {
            $persuratanQuery->where('status_persuratan', $status);
        }

        if ($search) {
            $persuratanQuery->where(function ($query) use ($search) {
                $query->whereHas('warga', function ($query) use ($search) {
                        $query->where('nik', 'like', '%' . $search . '%')
                            ->orWhere('nama_warga', 'like', '%' . $search . '%');
                     })
                    ->orWhere('jenis_persuratan', 'like', '%' . $search . '%')
                    ->orWhere('keterangan_persuratan', 'like', '%' . $search . '%')
                    ->orWhere('catatan_persuratan', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $persuratan = $persuratanQuery->orderBy('id_persuratan', 'desc')->paginate($perPage);

        return view('Dashboard.statussurat', ['persuratan' => $persuratan, 'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();
        $niks = WargaModel::all();

        return view('Dashboard.requestsurat', compact('rts', 'kks','niks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_rt' => 'required',
            'id_warga' => 'required',
            'jenis_persuratan' => 'required',
            'keterangan_persuratan' => 'required',
            // 'status_persuratan' => 'required',
            // 'tanggal_persuratan' => 'required',
        ]);

        PersuratanModel::create([
            'id_warga' => $request->id_warga,
            'jenis_persuratan' => $request->jenis_persuratan,
            'keterangan_persuratan' => $request->keterangan_persuratan,
            'status_persuratan' => 'Menunggu',
            'tanggal_persuratan' => now()->setTimezone('Asia/Jakarta'),
        ]);

        return redirect('/statussurat')->with('success', 'Data berhasil ditambah');
    }
}
