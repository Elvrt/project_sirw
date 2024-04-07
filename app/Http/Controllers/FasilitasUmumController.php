<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\FasilitasUmumModel;
use Illuminate\Http\Request;

class FasilitasUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FasilitasUmumModel::all();

        return view('FasilitasUmum.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = RtModel::all();

        return view('FasilitasUmum.create', compact('rts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FasilitasUmumModel::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan_fasilitas' => $request->keterangan_fasilitas,
            'alamat_fasilitas' => $request->alamat_fasilitas,
            'gambar_fasilitas' => '',
            'id_rt' => $request->id_rt,
        ]);

        return redirect('/fasilitas-umum')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fasilitasUmum = FasilitasUmumModel::find($id);

        return view('FasilitasUmum.show', $data = ['data' => $fasilitasUmum]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rts = RtModel::all();
        $fasilitasUmum = FasilitasUmumModel::find($id);

        return view('FasilitasUmum.edit', $data = ['data' => $fasilitasUmum], compact('rts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = FasilitasUmumModel::find($id);

        $data->update([
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan_fasilitas' => $request->keterangan_fasilitas,
            'alamat_fasilitas' => $request->alamat_fasilitas,
            'gambar_fasilitas' => '',
            'id_rt' => $request->id_rt,
        ]);

        return redirect('/fasilitas-umum')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            FasilitasUmumModel::destroy($id);

            return redirect('/fasilitas-umum')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/fasilitas-umum')->with('error', 'Data gagal dihapus');
        }
    }
}
