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
        $data = BeritaModel::find($id);

        $data->update([
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
        try {
            BeritaModel::destroy($id);

            return redirect('/RW/Berita')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/RW/Berita')->with('error', 'Data gagal dihapus');
        }
    }
}
