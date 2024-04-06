<?php

namespace App\Http\Controllers;

use App\Models\TataTertibModel;
use Illuminate\Http\Request;

class TataTertibController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TataTertibModel::all();

        return view('TataTertib.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TataTertib.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TataTertibModel::create([
            'deskripsi_tatib' => $request->deskripsi_tatib,
        ]);

        return redirect('/tata-tertib')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tataTertib = TataTertibModel::find($id);

        return view('TataTertib.show', $data = ['data' => $tataTertib]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tataTertib = TataTertibModel::find($id);

        return view('TataTertib.edit', $data = ['data' => $tataTertib]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = TataTertibModel::find($id);

        $data->update([
            'deskripsi_tatib' => $request->deskripsi_tatib,
        ]);

        return redirect('/tata-tertib')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            TataTertibModel::destroy($id);

            return redirect('/tata-tertib')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/tata-tertib')->with('error', 'Data gagal dihapus');
        }
    }
}
