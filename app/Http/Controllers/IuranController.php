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

        return view('RW.Iuran.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();

        return view('RW.Iuran.create', compact('rts', 'kks'));
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
            'tanggal_iuran' => 'required',
        ]);

        IuranModel::create([
            'id_kk' => $request->id_kk,
            'nominal' => $request->nominal,
            'status_iuran' => $request->status_iuran,
            'tanggal_iuran' => $request->tanggal_iuran,
        ]);

        return redirect('/RW/Iuran')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $iuran = IuranModel::find($id);

        return view('RW.Iuran.show', $data = ['data' => $iuran]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();
        $iuran = IuranModel::find($id);

        return view('RW.Iuran.edit', $data = ['data' => $iuran], compact('rts', 'kks'));
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
            'tanggal_iuran' => 'required',
        ]);

        IuranModel::find($id)->update([
            // 'id_kk' => $request->id_kk,
            'nominal' => $request->nominal,
            'status_iuran' => $request->status_iuran,
            'tanggal_iuran' => $request->tanggal_iuran,
        ]);

        return redirect('/RW/Iuran')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = IuranModel::find($id);
        if (!$check) {
            return redirect('/RW/Iuran')->with('error', 'Data tidak ditemukan');
        }

        try {
            IuranModel::destroy($id);

            return redirect('/RW/Iuran')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/Iuran')->with('error', 'Data gagal dihapus');
        }
    }
}
