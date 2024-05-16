<?php

namespace App\Http\Controllers;

use App\Models\LayananDaruratModel;
use Illuminate\Http\Request;

class LayananDaruratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 5;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        $layanan = LayananDaruratModel::paginate($perPage);

        return view('RW.LayananDarurat.index', ['layanan' => $layanan ,'startNumber' => $startNumber]);
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
        $request->validate([
            'nama_layanan' => 'required|max:50',
            'nomor_layanan' => 'required|max:15',
        ]);

        LayananDaruratModel::create([
            'nama_layanan' => $request->nama_layanan,
            'nomor_layanan' => $request->nomor_layanan,
        ]);

        return redirect('/RW/LayananDarurat')->with('success', 'Data berhasil ditambah');
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
        $request->validate([
            'nama_layanan' => 'required|max:50',
            'nomor_layanan' => 'required|max:15',
        ]);

        LayananDaruratModel::find($id)->update([
            'nama_layanan' => $request->nama_layanan,
            'nomor_layanan' => $request->nomor_layanan,
        ]);

        return redirect('/RW/LayananDarurat')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = LayananDaruratModel::find($id);
        if (!$check) {
            return redirect('/RW/LayananDarurat')->with('error', 'Data tidak ditemukan');
        }

        try {
            LayananDaruratModel::destroy($id);

            return redirect('/RW/LayananDarurat')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/LayananDarurat')->with('error', 'Data gagal dihapus');
        }
    }
}
