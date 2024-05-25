<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use App\Models\WargaModel;
use App\Models\PengaduanModel;
use Illuminate\Http\Request;

class PengaduanDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.pengaduan');
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
        $pengaduanQuery = PengaduanModel::query();

        if ($status) {
            $pengaduanQuery->where('status_pengaduan', $status);
        }

        if ($search) {
            $pengaduanQuery->where(function ($query) use ($search) {
                $query->whereHas('warga', function ($query) use ($search) {
                        $query->where('nik', 'like', '%' . $search . '%')
                            ->orWhere('nama_warga', 'like', '%' . $search . '%');
                     })
                    ->orWhere('judul_pengaduan', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi_pengaduan', 'like', '%' . $search . '%')
                    ->orWhere('catatan_pengaduan', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $pengaduan = $pengaduanQuery->orderBy('id_pengaduan', 'desc')->paginate($perPage);

        return view('Dashboard.statuspengaduan', ['pengaduan' => $pengaduan, 'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();
        $niks = WargaModel::all();

        return view('Dashboard.laporpengaduan', compact('rts', 'kks','niks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_rt' => 'required',
            'id_warga' => 'required',
            'judul_pengaduan' => 'required|max:50',
            'deskripsi_pengaduan' => 'required',
            // 'status_pengaduan' => 'required',
            // 'tanggal_pengaduan' => 'required',
        ]);

        PengaduanModel::create([
            'id_warga' => $request->id_warga,
            'judul_pengaduan' => $request->judul_pengaduan,
            'deskripsi_pengaduan' => $request->deskripsi_pengaduan,
            'status_pengaduan' => 'Menunggu',
            'tanggal_pengaduan' => now()->setTimezone('Asia/Jakarta'),
        ]);

        return redirect('/statuspengaduan')->with('success', 'Data berhasil ditambah');
    }
}
