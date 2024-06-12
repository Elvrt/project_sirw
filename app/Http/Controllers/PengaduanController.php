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
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $status = $request->query('status');
        $search = $request->query('search');

        // Query the WargaModel based on the parameters
        $pengaduanQuery = PengaduanModel::query();

        if ($status) {
            $pengaduanQuery->where('status_pengaduan', $status);
        }

        if ($search) {
            $pengaduanQuery->where(function ($query) use ($search) {
                $query->whereHas('warga', function ($query) use ($search) {
                        $query->where('nama_warga', 'like', '%' . $search . '%');
                     })
                    ->orWhere('judul_pengaduan', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi_pengaduan', 'like', '%' . $search . '%')
                    ->orWhere('catatan_pengaduan', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $pengaduan = $pengaduanQuery->orderBy('id_pengaduan', 'desc')->paginate($perPage);

        return view('RW.Pengaduan.index', ['pengaduan' => $pengaduan, 'startNumber' => $startNumber]);
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
        $request->validate([
            'id_warga' => 'required',
            'judul_pengaduan' => 'required|max:50',
            'deskripsi_pengaduan' => 'required',
            'gambar_pengaduan' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'status_pengaduan' => 'required',
            // 'tanggal_pengaduan' => 'required',
        ]);

        // Handle the image upload to Cloudinary
        if ($request->hasFile('gambar_pengaduan')) {
            $image = $request->file('gambar_pengaduan');
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        } else {
            return back()->withErrors(['pengaduan' => 'Failed to upload image.']);
        }

        PengaduanModel::create([
            'id_warga' => $request->id_warga,
            'judul_pengaduan' => $request->judul_pengaduan,
            'deskripsi_pengaduan' => $request->deskripsi_pengaduan,
            'status_pengaduan' => 'Menunggu',
            'gambar_pengaduan' => $result, // Save the Cloudinary URL
            'tanggal_pengaduan' => now()->setTimezone('Asia/Jakarta'),
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
        $request->validate([
            // 'id_warga' => 'required',
            // 'judul_pengaduan' => 'required|max:50',
            // 'deskripsi_pengaduan' => 'required',
            'status_pengaduan' => 'required',
            'catatan_pengaduan' => 'max:100',
            // 'gambar_pengaduan' => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'tanggal_pengaduan' => 'required',
        ]);

        // // Find the existing record
        // $pengaduan = PengaduanModel::find($id);

        // // If a new image is uploaded
        // if ($request->hasFile('gambar_pengaduan')) {
        //     // Delete the old image from Cloudinary if it exists
        //     if ($pengaduan->gambar_pengaduan) {
        //         CloudinaryStorage::delete($pengaduan->gambar_pengaduan);
        //     }

        //     // Handle the new image upload to Cloudinary
        //     $image = $request->file('gambar_pengaduan');
        //     $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        // } else {
        //     // If no new image is uploaded, keep the old image URL
        //     $result = $pengaduan->gambar_pengaduan;
        // }

        PengaduanModel::find($id)->update([
            // 'id_warga' => $request->id_warga,
            // 'judul_pengaduan' => $request->judul_pengaduan,
            // 'deskripsi_pengaduan' => $request->deskripsi_pengaduan,
            'status_pengaduan' => $request->status_pengaduan,
            'catatan_pengaduan' => $request->catatan_pengaduan,
            // 'gambar_pengaduan' => $result,
            // 'tanggal_pengaduan' => $request->tanggal_pengaduan,
        ]);

        return redirect('RW/Pengaduan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = PengaduanModel::find($id);
        if (!$check) {
            return redirect('/RW/Pengaduan')->with('error', 'Data tidak ditemukan');
        }

        // Delete the old image from Cloudinary if it exists
        if ($check->gambar_pengaduan) {
            CloudinaryStorage::delete($check->gambar_pengaduan);
        }

        try {
            PengaduanModel::destroy($id);

            return redirect('/RW/Pengaduan')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/Pengaduan')->with('error', 'Data gagal dihapus');
        }
    }
}
