<?php

namespace App\Http\Controllers;

use App\Models\WargaModel;
use App\Models\StrukturRwModel;
use Illuminate\Http\Request;

class StrukturRwController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        $struktur = StrukturRwModel::paginate($perPage);

        return view('RW.StrukturRw.index', ['struktur' => $struktur, 'startNumber' => $startNumber]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $existingIds = StrukturRwModel::pluck('id_warga')->toArray();
        $niks = WargaModel::all();

        return view('RW.StrukturRw.create', compact('niks', 'existingIds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_struktur' => 'required|max:5|unique:struktur_rw,kode_struktur',
            'nama_struktur' => 'required|max:25',
            'id_warga' => 'required|unique:struktur_rw,id_warga',
        ]);

        StrukturRWModel::create([
            'kode_struktur' => $request->kode_struktur,
            'nama_struktur' => $request->nama_struktur,
            'id_warga' => $request->id_warga,
        ]);

        return redirect('/RW/StrukturRw')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $strukturRw = StrukturRwModel::find($id);

        return view('RW.StrukturRw.show', $data = ['data' => $strukturRw]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $existingIds = StrukturRwModel::pluck('id_warga')->toArray();
        $niks = WargaModel::all();
        $strukturRw = StrukturRwModel::find($id);

        return view('RW.StrukturRw.edit', $data = ['data' => $strukturRw], compact('niks', 'existingIds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_struktur' => 'required|max:5|unique:struktur_rw,kode_struktur,'.$id.',id_struktur',
            'nama_struktur' => 'required|max:25',
            'id_warga' => 'required|unique:struktur_rw,id_warga,'.$id.',id_struktur',
        ]);

        StrukturRwModel::find($id)->update([
            'kode_struktur' => $request->kode_struktur,
            'nama_struktur' => $request->nama_struktur,
            'id_warga' => $request->id_warga,
        ]);

        return redirect('/RW/StrukturRw')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = StrukturRwModel::find($id);
        if (!$check) {
            return redirect('/RW/StrukturRw')->with('error', 'Data tidak ditemukan');
        }

        try {
            StrukturRwModel::destroy($id);

            return redirect('/RW/StrukturRw')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/StrukturRw')->with('error', 'Data gagal dihapus');
        }
    }
}
