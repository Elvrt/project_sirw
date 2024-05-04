<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use App\Models\WargaModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warga = WargaModel::all();
        $kartuKeluarga = KartuKeluargaModel::all();
        $rt = RtModel::all();

        return view('RW.Warga.index', ['warga' => $warga, 'kartuKeluarga' => $kartuKeluarga, 'rt' => $rt]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();

        return view('RW.Warga.create', compact('rts', 'kks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        WargaModel::create([
            'id_kk' => $request->id_kk,
            'nik' => $request->nik,
            'nama_warga' => $request->nama_warga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan,
            'status_hubungan' => $request->status_hubungan,
        ]);

        return redirect('/RW/Warga')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $warga = WargaModel::find($id);

        return view('RW.Warga.show', $data = ['data' => $warga]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();
        $warga = WargaModel::find($id);

        return view('RW.Warga.edit', $data = ['data' => $warga], compact('rts', 'kks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = WargaModel::find($id);

        $data->update([
            // 'id_kk' => $request->id_kk,
            'nik' => $request->nik,
            'nama_warga' => $request->nama_warga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            // 'penghasilan' => $request->penghasilan,
            'status_hubungan' => $request->status_hubungan,
        ]);

        return redirect('/RW/Warga')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            WargaModel::destroy($id);

            return redirect('/RW/Warga')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/RW/Warga')->with('error', 'Data gagal dihapus');
        }
    }
}
