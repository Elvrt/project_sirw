<?php

namespace App\Http\Controllers;

use App\Models\LayananDaruratModel;
use Illuminate\Http\Request;

class LayananDaruratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = LayananDaruratModel::all();

        return view('RW.LayananDarurat.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('RW.LayananDarurat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        LayananDaruratModel::create([
            'nama_layanan' => $request->nama_layanan,
            'nomor_layanan' => $request->nomor_layanan,
        ]);

        return redirect('/RW/layanan-darurat')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $layananDarurat = LayananDaruratModel::find($id);

        return view('RW.LayananDarurat.show', $data = ['data' => $layananDarurat]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layananDarurat = LayananDaruratModel::find($id);

        return view('RW.LayananDarurat.edit', $data = ['data' => $layananDarurat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = LayananDaruratModel::find($id);

        $data->update([
            'nama_layanan' => $request->nama_layanan,
            'nomor_layanan' => $request->nomor_layanan,
        ]);

        return redirect('/RW/layanan-darurat')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            LayananDaruratModel::destroy($id);

            return redirect('/RW/layanan-darurat')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/RW/layanan-darurat')->with('error', 'Data gagal dihapus');
        }
    }
}
