<?php

namespace App\Http\Controllers;

use App\Models\TataTertibModel;
use Illuminate\Http\Request;

class TataTertibController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request;
        $search = $request->query('search');

        // Query the WargaModel based on the parameters
        $tatibQuery = TataTertibModel::query();

        if ($search) {
            $tatibQuery->where(function ($query) use ($search) {
                $query->where('deskripsi_tatib', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $tatatertib = $tatibQuery->paginate($perPage);

        return view('RW.TataTertib.index', ['tatatertib' => $tatatertib, 'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('RW.TataTertib.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi_tatib' => 'required',
        ]);

        TataTertibModel::create([
            'deskripsi_tatib' => $request->deskripsi_tatib,
        ]);

        return redirect('/RW/TataTertib')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tataTertib = TataTertibModel::find($id);

        return view('RW.TataTertib.show', $data = ['data' => $tataTertib]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tataTertib = TataTertibModel::find($id);

        return view('RW.TataTertib.edit', $data = ['data' => $tataTertib]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'deskripsi_tatib' => 'required',
        ]);

        TataTertibModel::find($id)->update([
            'deskripsi_tatib' => $request->deskripsi_tatib,
        ]);

        return redirect('/RW/TataTertib')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = TataTertibModel::find($id);
        if (!$check) {
            return redirect('/RW/TataTertib')->with('error', 'Data tidak ditemukan');
        }

        try {
            TataTertibModel::destroy($id);

            return redirect('/RW/TataTertib')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/TataTertib')->with('error', 'Data gagal dihapus');
        }
    }
}
