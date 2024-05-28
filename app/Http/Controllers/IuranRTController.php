<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use App\Models\IuranModel;
use Illuminate\Http\Request;

class IuranRTController extends Controller
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
        $iuranQuery = IuranModel::query();

        $idRt = auth()->user()->warga->kartuKeluarga->rt->id_rt;
        $iuranQuery->whereHas('kartuKeluarga.warga', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        });

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

        return view('RT.Iuran.index', ['iuran' => $iuran, 'rt' => $rt,'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = auth()->user()->warga->kartuKeluarga->rt->id_rt;
        $kks = KartuKeluargaModel::join('warga', 'kartu_keluarga.id_kk', '=', 'warga.id_kk')
                               ->where('kartu_keluarga.id_rt', $rts)
                               ->where('warga.status_hubungan', 'Kepala Keluarga')
                               ->select('kartu_keluarga.*', 'warga.nama_warga')
                               ->get();

        return view('RT.Iuran.create', compact('rts', 'kks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_rt' => 'required',
            'id_kk' => 'required',
            'nominal' => 'required|numeric|min:0',
            'status_iuran' => 'required',
            'tanggal_iuran' => 'required|date',
        ]);

        IuranModel::create([
            'id_kk' => $request->id_kk,
            'nominal' => $request->nominal,
            'status_iuran' => $request->status_iuran,
            'tanggal_iuran' => $request->tanggal_iuran,
        ]);

        return redirect('/RT/Iuran')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $iuran = IuranModel::find($id);

        return view('RT.Iuran.show', $data = ['data' => $iuran]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();
        $iuran = IuranModel::find($id);

        return view('RT.Iuran.edit', $data = ['data' => $iuran], compact('rts', 'kks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'id_rt' => 'required',
            // 'id_kk' => 'required',
            'nominal' => 'required|numeric|min:0',
            'status_iuran' => 'required',
            'tanggal_iuran' => 'required|date',
        ]);

        IuranModel::find($id)->update([
            // 'id_kk' => $request->id_kk,
            'nominal' => $request->nominal,
            'status_iuran' => $request->status_iuran,
            'tanggal_iuran' => $request->tanggal_iuran,
        ]);

        return redirect('/RT/Iuran')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = IuranModel::find($id);
        if (!$check) {
            return redirect('/RT/Iuran')->with('error', 'Data tidak ditemukan');
        }

        try {
            IuranModel::destroy($id);

            return redirect('/RT/Iuran')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RT/Iuran')->with('error', 'Data gagal dihapus');
        }
    }
}
