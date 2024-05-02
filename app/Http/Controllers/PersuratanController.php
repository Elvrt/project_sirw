<?php

namespace App\Http\Controllers;

use App\Models\WargaModel;
use App\Models\PersuratanModel;
use Illuminate\Http\Request;

class PersuratanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PersuratanModel::all();

        return view('RW.Persuratan.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $niks = WargaModel::all();

        return view('RW.Persuratan.create', compact('niks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PersuratanModel::create([
            'id_warga' => $request->id_warga,
            'jenis_persuratan' => $request->jenis_persuratan,
            'keterangan_persuratan' => $request->keterangan_persuratan,
            'status_persuratan' => $request->status_persuratan,
            'tanggal_persuratan' => $request->tanggal_persuratan,
        ]);

        return redirect('/RW/Persuratan')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $persuratan = PersuratanModel::find($id);

        return view('RW.Persuratan.show', $data = ['data' => $persuratan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $niks = WargaModel::all();
        $persuratan = PersuratanModel::find($id);

        return view('RW.Persuratan.edit', $data = ['data' => $persuratan], compact('niks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = PersuratanModel::find($id);

        $data->update([
            // 'id_warga' => $request->id_warga,
            'jenis_persuratan' => $request->jenis_persuratan,
            'keterangan_persuratan' => $request->keterangan_persuratan,
            'status_persuratan' => $request->status_persuratan,
            'tanggal_persuratan' => $request->tanggal_persuratan,
        ]);

        return redirect('/RW/Persuratan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            PersuratanModel::destroy($id);

            return redirect('/RW/Persuratan')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/RW/Persuratan')->with('error', 'Data gagal dihapus');
        }
    }
}
