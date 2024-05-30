<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use App\Models\WargaModel;
use App\Models\SktmModel;
use Illuminate\Http\Request;

class SktmDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $idRt = $request->query('id_rt');
        $status = $request->query('status');
        $search = $request->query('search');

        // Query the WargaModel based on the parameters
        $sktmQuery = SktmModel::query();

        if ($idRt) {
            $sktmQuery->whereHas('warga.kartuKeluarga.rt', function ($query) use ($idRt) {
                $query->where('id_rt', $idRt);
            });
        }

        if ($status) {
            $sktmQuery->where('status_sktm', $status);
        }

        if ($search) {
            $sktmQuery->where(function ($query) use ($search) {
                $query->whereHas('warga', function ($query) use ($search) {
                        $query->where('nik', 'like', '%' . $search . '%')
                            ->orWhere('nama_warga', 'like', '%' . $search . '%');
                     })
                    ->orWhere('keterangan_sktm', 'like', '%' . $search . '%')
                    ->orWhere('catatan_sktm', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $sktm = $sktmQuery->orderBy('id_sktm', 'desc')->paginate($perPage);

        $rt = RtModel::all();

        return view('Dashboard.statussktm', ['sktm' => $sktm, 'rt' => $rt, 'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();
        $niks = WargaModel::with('kartuKeluarga.rt')->get();

        return view('Dashboard.requestsktm', compact('rts', 'kks','niks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_warga' => 'required',
            'keterangan_sktm' => 'required',
            'gambar_rumah' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'jumlah_penghasilan' => 'required|numeric|min:0',
            'gambar_slip' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'jumlah_anggota' => 'required|numeric|min:0',
            'jumlah_kendaraan' => 'required|numeric|min:0',
        ]);

        // Handle the image upload
        if ($request->hasFile('gambar_rumah')) {
            $image = $request->file('gambar_rumah');
            $imageRumah = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/rumah'), $imageRumah);
        } else {
            return back()->withErrors(['gambar_rumah' => 'Failed to upload image.']);
        }

        if ($request->hasFile('gambar_slip')) {
            $image = $request->file('gambar_slip');
            $imageSlip = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/slip'), $imageSlip);
        } else {
            return back()->withErrors(['gambar_slip' => 'Failed to upload image.']);
        }

        SktmModel::create([
            'id_warga' => $request->id_warga,
            'keterangan_sktm' => $request->keterangan_sktm,
            'gambar_rumah' => $imageRumah,
            'jumlah_penghasilan' => $request->jumlah_penghasilan,
            'gambar_slip' => $imageSlip,
            'jumlah_anggota' => $request->jumlah_anggota,
            'jumlah_kendaraan' => $request->jumlah_kendaraan,
            'status_sktm' => 'Menunggu',
            'tanggal_sktm' => now()->setTimezone('Asia/Jakarta'),
        ]);

        return redirect('/statussktm')->with('success', 'Data berhasil ditambah');
    }
}
