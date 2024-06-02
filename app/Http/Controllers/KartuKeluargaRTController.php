<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use Illuminate\Http\Request;

class KartuKeluargaRTController extends Controller
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
        $search = $request->query('search');

        // Query the WargaModel based on the parameters
        $kkQuery = KartuKeluargaModel::query();

        $idRt = auth()->user()->warga->kartuKeluarga->rt->id_rt;
        $kkQuery->whereHas('rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        });

        if ($search) {
            $kkQuery->where(function ($query) use ($search) {
                $query->where('no_kk', 'like', '%' . $search . '%')
                    ->orWhereHas('warga', function ($query) use ($search) {
                        $query->where('nama_warga', 'like', '%' . $search . '%')
                            ->where('status_hubungan', 'Kepala Keluarga');
                     })
                     ->orWhereHas('warga', function ($query) use ($search) {
                        $query->where('nomor_telepon', 'like', '%' . $search . '%')
                            ->where('status_hubungan', 'Kepala Keluarga');
                     });
            });
        }

        // Paginate the result
        $kk = $kkQuery->paginate($perPage);

        $rt = RtModel::all();

        return view('RT.KartuKeluarga.index', ['kk' => $kk , 'rt' => $rt, 'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = auth()->user()->warga->kartuKeluarga->rt->id_rt;

        return view('RT.KartuKeluarga.create', compact('rts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_rt' => 'required',
            'no_kk' => 'required|max:16|unique:kartu_keluarga,no_kk',
        ]);

        KartuKeluargaModel::create([
            'id_rt' => $request->id_rt,
            'no_kk' => $request->no_kk,
        ]);

        return redirect('/RT/KartuKeluarga')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kartuKeluarga = KartuKeluargaModel::find($id);

        return view('RT.KartuKeluarga.show', $data = ['data' => $kartuKeluarga]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rts = auth()->user()->warga->kartuKeluarga->rt->id_rt;
        $kartuKeluarga = KartuKeluargaModel::find($id);

        return view('RT.KartuKeluarga.edit', $data = ['data' => $kartuKeluarga], compact('rts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_rt' => 'required',
            'no_kk' => 'required|max:16|unique:kartu_keluarga,no_kk,'.$id.',id_kk',
        ]);

        KartuKeluargaModel::find($id)->update([
            'id_rt' => $request->id_rt,
            'no_kk' => $request->no_kk,
        ]);

        return redirect('/RT/KartuKeluarga')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = KartuKeluargaModel::find($id);
        if (!$check) {
            return redirect('/RT/KartuKeluarga')->with('error', 'Data tidak ditemukan');
        }

        try {
            KartuKeluargaModel::destroy($id);

            return redirect('/RT/KartuKeluarga')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RT/KartuKeluarga')->with('error', 'Data gagal dihapus');
        }
    }
}
