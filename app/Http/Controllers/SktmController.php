<?php

namespace App\Http\Controllers;

use App\Models\WargaModel;
use App\Models\SktmModel;
use Illuminate\Http\Request;

class SktmController extends Controller
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

        // Query the SktmModel based on the parameters
        $sktmQuery = SktmModel::query();

        if ($status) {
            $sktmQuery->where('status_sktm', $status);
        }

        if ($search) {
            $sktmQuery->where(function ($query) use ($search) {
                $query->whereHas('warga', function ($query) use ($search) {
                        $query->where('nama_warga', 'like', '%' . $search . '%');
                     })
                    ->orWhere('keterangan_sktm', 'like', '%' . $search . '%')
                    ->orWhere('jumlah_penghasilan', 'like', '%' . $search . '%')
                    ->orWhere('jumlah_anggota', 'like', '%' . $search . '%')
                    ->orWhere('jumlah_kendaraan', 'like', '%' . $search . '%')
                    ->orWhere('catatan_sktm', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $sktm = $sktmQuery->orderBy('id_sktm', 'desc')->paginate($perPage);

        return view('RW.Sktm.index', ['sktm' => $sktm, 'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $niks = WargaModel::all();

        return view('RW.Sktm.create', compact('niks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_warga' => 'required',
            'keterangan_sktm' => 'required',
            'gambar_rumah' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'jumlah_penghasilan' => 'required|numeric|min:0',
            'gambar_slip' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'jumlah_anggota' => 'required|numeric|min:0',
            'jumlah_kendaraan' => 'required|numeric|min:0',
        ]);

        // Handle the image upload
        if ($request->hasFile('gambar_rumah')) {
            $image = $request->file('gambar_rumah');
            $imageRumah = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/rumah'), $imageRumah);
        } else {
            return back()->withErrors(['gambar_rumah' => 'Failed to upload image.']);
        }

        if ($request->hasFile('gambar_slip')) {
            $image = $request->file('gambar_slip');
            $imageSlip = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/slip'), $imageSlip);
        } else {
            return back()->withErrors(['gambar_slip' => 'Failed to upload image.']);
        }

        SktmModel::create([
            'id_warga' => $request->id_warga,
            'keterangan_sktm' => $request->keterangan_sktm,
            'gambar_rumah' => $imageRumah,
            'jumlah_penghasilan' => $request->jumlah_penghasilan,
            'gambar_slip' => $imageSlip,
            'jumlah_anggota' => $request->jumlah_anggota,
            'jumlah_kendaraan' => $request->jumlah_kendaraan,
            'status_sktm' => 'Menunggu',
            'tanggal_sktm' => now()->setTimezone('Asia/Jakarta'),
        ]);

        return redirect('/RW/Sktm')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sktm = SktmModel::find($id);

        return view('RW.Sktm.show', $data = ['data' => $sktm]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $niks = WargaModel::all();
        $sktm = SktmModel::find($id);

        return view('RW.Sktm.edit', $data = ['data' => $sktm], compact('niks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status_sktm' => 'required',
            'catatan_sktm' => 'max:100',
        ]);

        SktmModel::find($id)->update([
            'status_sktm' => $request->status_sktm,
            'catatan_sktm' => $request->catatan_sktm,
        ]);

        return redirect('/RW/Sktm')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = SktmModel::find($id);
        if (!$check) {
            return redirect('/RW/Sktm')->with('error', 'Data tidak ditemukan');
        }

        // Delete the old image if it exists
        if ($check->gambar_rumah && file_exists(public_path('assets/img/rumah/' . $check->gambar_rumah))) {
            unlink(public_path('assets/img/rumah/' . $check->gambar_rumah));
        }
        if ($check->gambar_slip && file_exists(public_path('assets/img/slip/' . $check->gambar_slip))) {
            unlink(public_path('assets/img/slip/' . $check->gambar_slip));
        }

        try {
            SktmModel::destroy($id);

            return redirect('/RW/Sktm')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/Sktm')->with('error', 'Data gagal dihapus');
        }
    }
}
