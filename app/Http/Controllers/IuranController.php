<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use App\Models\IuranModel;
use Illuminate\Http\Request;

class IuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = IuranModel::all();

        return view('Iuran.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();

        return view('Iuran.create', compact('rts', 'kks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        IuranModel::create([
            'id_kk' => $request->id_kk,
            'nominal' => $request->nominal,
            'status_iuran' => $request->status_iuran,
            'tanggal_iuran' => $request->tanggal_iuran,
        ]);

        return redirect('/iuran')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $iuran = IuranModel::find($id);

        return view('Iuran.show', $data = ['data' => $iuran]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();
        $iuran = IuranModel::find($id);

        return view('Iuran.edit', $data = ['data' => $iuran], compact('rts', 'kks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = IuranModel::find($id);

        $data->update([
            // 'id_kk' => $request->id_kk,
            'nominal' => $request->nominal,
            'status_iuran' => $request->status_iuran,
            'tanggal_iuran' => $request->tanggal_iuran,
        ]);

        return redirect('/iuran')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            IuranModel::destroy($id);

            return redirect('/iuran')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/iuran')->with('error', 'Data gagal dihapus');
        }
    }
}
