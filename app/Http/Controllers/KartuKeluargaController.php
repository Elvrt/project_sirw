<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        $kk = KartuKeluargaModel::paginate($perPage);

        return view('RW.KartuKeluarga.index', ['kk' => $kk ,'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = RtModel::all();

        return view('RW.KartuKeluarga.create', compact('rts'));
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

        return redirect('/RW/KartuKeluarga')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kartuKeluarga = KartuKeluargaModel::find($id);

        return view('RW.KartuKeluarga.show', $data = ['data' => $kartuKeluarga]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rts = RtModel::all();
        $kartuKeluarga = KartuKeluargaModel::find($id);

        return view('RW.KartuKeluarga.edit', $data = ['data' => $kartuKeluarga], compact('rts'));
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

        return redirect('/RW/KartuKeluarga')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = KartuKeluargaModel::find($id);
        if (!$check) {
            return redirect('/RW/KartuKeluarga')->with('error', 'Data tidak ditemukan');
        }

        try {
            KartuKeluargaModel::destroy($id);

            return redirect('/RW/KartuKeluarga')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/KartuKeluarga')->with('error', 'Data gagal dihapus');
        }
    }
}
