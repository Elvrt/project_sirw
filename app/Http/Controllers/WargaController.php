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
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $idRt = $request->query('id_rt');
        $jk = $request->query('jk');
        $search = $request->query('search');

        // Query the WargaModel based on the parameters
        $wargaQuery = WargaModel::query();

        if ($idRt) {
            $wargaQuery->whereHas('kartuKeluarga.rt', function ($query) use ($idRt) {
                $query->where('id_rt', $idRt);
            });
        }

        if ($jk) {
            $wargaQuery->where('jenis_kelamin', $jk);
        }

        if ($search) {
            $wargaQuery->where(function ($query) use ($search) {
                $query->where('nama_warga', 'like', '%' . $search . '%')
                    ->orWhereHas('kartuKeluarga', function ($query) use ($search) {
                        $query->where('no_kk', 'like', '%' . $search . '%');
                     })
                    ->orWhere('nik', 'like', '%' . $search . '%')
                    ->orWhere('tempat_lahir', 'like', '%' . $search . '%')
                    ->orWhere('alamat', 'like', '%' . $search . '%')
                    ->orWhere('nomor_telepon', 'like', '%' . $search . '%')
                    ->orWhere('agama', 'like', '%' . $search . '%')
                    ->orWhere('pekerjaan', 'like', '%' . $search . '%')
                    ->orWhere('penghasilan', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $warga = $wargaQuery->paginate($perPage);

        $rt = RtModel::all();

        return view('RW.Warga.index', [
            'warga' => $warga,
            'rt' => $rt,
            'startNumber' => $startNumber,
        ]);
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
        $request->validate([
            'id_rt' => 'required',
            'id_kk' => 'required',
            'nik' => 'required|max:16|unique:warga,nik',
            'nama_warga' => 'required|max:100',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|max:100',
            'nomor_telepon' => 'required|max:15|unique:warga,nomor_telepon',
            'agama' => 'required',
            'pekerjaan' => 'required|max:40',
            'penghasilan' => 'required|numeric|min:0',
            'status_hubungan' => 'required',
        ]);

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
        $request->validate([
            'id_rt' => 'required',
            'id_kk' => 'required',
            'nik' => 'required|max:16|unique:warga,nik,'.$id.',id_warga',
            'nama_warga' => 'required|max:100',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|max:100',
            'nomor_telepon' => 'required|max:15|unique:warga,nomor_telepon,'.$id.',id_warga',
            'agama' => 'required',
            'pekerjaan' => 'required|max:40',
            'penghasilan' => 'required|numeric|min:0',
            'status_hubungan' => 'required',
        ]);

        WargaModel::find($id)->update([
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

        return redirect('/RW/Warga')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = WargaModel::find($id);
        if (!$check) {
            return redirect('/RW/Warga')->with('error', 'Data tidak ditemukan');
        }

        try {
            WargaModel::destroy($id);

            return redirect('/RW/Warga')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/Warga')->with('error', 'Data gagal dihapus');
        }
    }
}
