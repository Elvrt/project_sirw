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
    public function index()
    {
        $data = KartuKeluargaModel::all();

        return view('KartuKeluarga.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('KartuKeluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        KartuKeluargaModel::create([
            'id_rt' => $request->id_rt,
            'no_kk' => $request->no_kk,
        ]);

        return redirect('/kartu-keluarga')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kartuKeluarga = KartuKeluargaModel::find($id);

        return view('Agenda.show', $data = ['data' => $kartuKeluarga]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kartuKeluarga = KartuKeluargaModel::find($id);

        return view('Agenda.edit', $data = ['data' => $kartuKeluarga]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = KartuKeluargaModel::find($id);

        $data->update([
            'id_rt' => $request->id_rt,
            'no_kk' => $request->no_kk,
        ]);

        return redirect('/kartu-keluarga')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            KartuKeluargaModel::destroy($id);

            return redirect('/kartu-keluarga')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/kartu-keluarga')->with('error', 'Data gagal dihapus');
        }
    }
}
