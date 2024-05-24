<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use Illuminate\Http\Request;

class BeritaRTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 5;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $search = $request->query('search');

        // Query the AgendaModel based on the parameters
        $beritaQuery = BeritaModel::query();

        if ($search) {
            $beritaQuery->where(function ($query) use ($search) {
                $query->where('judul_berita', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi_berita', 'like', '%' . $search . '%');
            });
        }

        $berita = $beritaQuery->paginate($perPage);

        return view('RT.Berita.index', ['berita' => $berita ,'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('RT.Berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required|max:100',
            'deskripsi_berita' => 'required',
            'gambar_berita' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'tanggal_berita' => 'required',
        ]);

        // Handle the image upload
        if ($request->hasFile('gambar_berita')) {
            $image = $request->file('gambar_berita');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/berita'), $imageName);
        } else {
            return back()->withErrors(['gambar_berita' => 'Failed to upload image.']);
        }

        // Create the record in the database
        BeritaModel::create([
            'judul_berita' => $request->judul_berita,
            'deskripsi_berita' => $request->deskripsi_berita,
            'gambar_berita' => $imageName,
            'tanggal_berita' => $request->tanggal_berita,
        ]);

        return redirect('/RT/Berita')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = BeritaModel::find($id);

        return view('RT.Berita.show', $data = ['data' => $berita]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = BeritaModel::find($id);

        return view('RT.Berita.edit', $data = ['data' => $berita]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_berita' => 'required|max:100',
            'deskripsi_berita' => 'required',
            'gambar_berita' => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'tanggal_berita' => 'required',
        ]);

        // Find the existing record
        $berita = BeritaModel::find($id);

        // If a new image is uploaded
        if ($request->hasFile('gambar_berita')) {
            // Delete the old image if it exists
            if ($berita->gambar_berita && file_exists(public_path('assets/img/berita/' . $berita->gambar_berita))) {
                unlink(public_path('assets/img/berita/' . $berita->gambar_berita));
            }

            // Handle the new image upload
            $image = $request->file('gambar_berita');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/berita'), $imageName);
        } else {
            // If no new image is uploaded, keep the old image name
            $imageName = $berita->gambar_berita;
        }

        // Update the record in the database
        $berita->update([
            'judul_berita' => $request->judul_berita,
            'deskripsi_berita' => $request->deskripsi_berita,
            'gambar_berita' => $imageName,
            'tanggal_berita' => $request->tanggal_berita,
        ]);

        return redirect('/RT/Berita')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = BeritaModel::find($id);
        if (!$check) {
            return redirect('/RT/Berita')->with('error', 'Data tidak ditemukan');
        }

        // Delete the old image if it exists
        if ($check->gambar_berita && file_exists(public_path('assets/img/berita/' . $check->gambar_berita))) {
            unlink(public_path('assets/img/berita/' . $check->gambar_berita));
        }

        try {
            BeritaModel::destroy($id);

            return redirect('/RT/Berita')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RT/Berita')->with('error', 'Data gagal dihapus');
        }
    }
}
