<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BeritaModel::all();

        return view('RW.Berita.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('RW.Berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required|max:100',
            'deskripsi_berita' => 'required',
            'gambar_berita' => 'required',
            'tanggal_berita' => 'required',
        ]);

        BeritaModel::create([
            'judul_berita' => $request->judul_berita,
            'deskripsi_berita' => $request->deskripsi_berita,
            'gambar_berita' => '',
            'tanggal_berita' => $request->tanggal_berita,
        ]);

        return redirect('/RW/Berita')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = BeritaModel::find($id);

        return view('RW.Berita.show', $data = ['data' => $berita]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = BeritaModel::find($id);

        return view('RW.Berita.edit', $data = ['data' => $berita]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_berita' => 'required|max:100',
            'deskripsi_berita' => 'required',
            'gambar_berita' => 'required',
            'tanggal_berita' => 'required',
        ]);

        BeritaModel::find($id)->update([
            'judul_berita' => $request->judul_berita,
            'deskripsi_berita' => $request->deskripsi_berita,
            'gambar_berita' => '',
            'tanggal_berita' => $request->tanggal_berita,
        ]);

        return redirect('/RW/Berita')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = BeritaModel::find($id);
        if (!$check) {
            return redirect('/RW/Berita')->with('error', 'Data tidak ditemukan');
        }

        try {
            BeritaModel::destroy($id);

            return redirect('/RW/Berita')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/Berita')->with('error', 'Data gagal dihapus');
        }
    }
}
