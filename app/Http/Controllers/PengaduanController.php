<?php

namespace App\Http\Controllers;

use App\Models\WargaModel;
use App\Models\PengaduanModel;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PengaduanModel::all();

        return view('RW.Pengaduan.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $niks = WargaModel::all();

        return view('RW.Pengaduan.create', compact('niks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PengaduanModel::create([
            'id_warga' => $request->id_warga,
            'judul_pengaduan' => $request->judul_pengaduan,
            'deskripsi_pengaduan' => $request->deskripsi_pengaduan,
            'status_pengaduan' => $request->status_pengaduan,
            'tanggal_pengaduan' => $request->tanggal_pengaduan,
        ]);

        return redirect('RW/Pengaduan')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengaduan = PengaduanModel::find($id);

        return view('RW.Pengaduan.show', $data = ['data' => $pengaduan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $niks = WargaModel::all();
        $pengaduan = PengaduanModel::find($id);

        return view('RW.Pengaduan.edit', $data = ['data' => $pengaduan], compact('niks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = PengaduanModel::find($id);

        $data->update([
            // 'id_warga' => $request->id_warga,
            'judul_pengaduan' => $request->judul_pengaduan,
            'deskripsi_pengaduan' => $request->deskripsi_pengaduan,
            'status_pengaduan' => $request->status_pengaduan,
            'tanggal_pengaduan' => $request->tanggal_pengaduan,
        ]);

        return redirect('RW/Pengaduan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            PengaduanModel::destroy($id);

            return redirect('RW/Pengaduan')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('RW/Pengaduan')->with('error', 'Data gagal dihapus');
        }
    }
}
