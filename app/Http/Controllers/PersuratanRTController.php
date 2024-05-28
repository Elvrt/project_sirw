<?php

namespace App\Http\Controllers;

use App\Models\WargaModel;
use App\Models\PersuratanModel;
use Illuminate\Http\Request;

class PersuratanRTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $status = $request->query('status');
        $search = $request->query('search');

        // Query the WargaModel based on the parameters
        $persuratanQuery = PersuratanModel::query();

        $idRt = auth()->user()->warga->kartuKeluarga->rt->id_rt;
        $persuratanQuery->whereHas('warga.kartuKeluarga.rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        });

        if ($status) {
            $persuratanQuery->where('status_persuratan', $status);
        }

        if ($search) {
            $persuratanQuery->where(function ($query) use ($search) {
                $query->whereHas('warga', function ($query) use ($search) {
                        $query->where('nama_warga', 'like', '%' . $search . '%');
                     })
                    ->orWhere('jenis_persuratan', 'like', '%' . $search . '%')
                    ->orWhere('keterangan_persuratan', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $persuratan = $persuratanQuery->paginate($perPage);

        return view('RT.Persuratan.index', ['persuratan' => $persuratan ,'startNumber' => $startNumber]);
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
        $request->validate([
            'id_warga' => 'required',
            'jenis_persuratan' => 'required',
            'keterangan_persuratan' => 'required',
            // 'status_persuratan' => 'required',
            // 'tanggal_persuratan' => 'required',
        ]);

        PersuratanModel::create([
            'id_warga' => $request->id_warga,
            'jenis_persuratan' => $request->jenis_persuratan,
            'keterangan_persuratan' => $request->keterangan_persuratan,
            'status_persuratan' => 'Menunggu',
            'tanggal_persuratan' => now()->setTimezone('Asia/Jakarta'),
        ]);

        return redirect('/RT/Persuratan')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $persuratan = PersuratanModel::find($id);

        return view('RT.Persuratan.show', $data = ['data' => $persuratan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $niks = WargaModel::all();
        $persuratan = PersuratanModel::find($id);

        return view('RT.Persuratan.edit', $data = ['data' => $persuratan], compact('niks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'id_warga' => 'required',
            // 'jenis_persuratan' => 'required',
            // 'keterangan_persuratan' => 'required',
            'status_persuratan' => 'required',
            'catatan_persuratan' => 'max:100',
            // 'tanggal_persuratan' => 'required',
        ]);

        PersuratanModel::find($id)->update([
            // 'id_warga' => $request->id_warga,
            // 'jenis_persuratan' => $request->jenis_persuratan,
            // 'keterangan_persuratan' => $request->keterangan_persuratan,
            'status_persuratan' => $request->status_persuratan,
            'catatan_persuratan' => $request->catatan_persuratan,
            // 'tanggal_persuratan' => $request->tanggal_persuratan,
        ]);

        return redirect('/RT/Persuratan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = PersuratanModel::find($id);
        if (!$check) {
            return redirect('/RT/Persuratan')->with('error', 'Data tidak ditemukan');
        }

        try {
            PersuratanModel::destroy($id);

            return redirect('/RT/Persuratan')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RT/Persuratan')->with('error', 'Data gagal dihapus');
        }
    }
}
