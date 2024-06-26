<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\FasilitasUmumModel;
use Illuminate\Http\Request;

class FasilitasUmumRTController extends Controller
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
        $idRt = $request->query('id_rt');
        $search = $request->query('search');

        // Query the FasilitasModel based on the parameters
        $fasilitasQuery = FasilitasUmumModel::query();

        $idRt = auth()->user()->warga->kartuKeluarga->rt->id_rt;
        $fasilitasQuery->whereHas('rt', function ($query) use ($idRt) {
            $query->where('id_rt', $idRt);
        });

        if ($search) {
            $fasilitasQuery->where(function ($query) use ($search) {
                $query->where('nama_fasilitas', 'like', '%' . $search . '%')
                    ->orWhere('keterangan_fasilitas', 'like', '%' . $search . '%')
                    ->orWhere('alamat_fasilitas', 'like', '%' . $search . '%');
            });
        }

        $fasilitas = $fasilitasQuery->paginate($perPage);

        $rt = RtModel::all();

        return view('RT.FasilitasUmum.index', ['fasilitas' => $fasilitas, 'rt' => $rt, 'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = auth()->user()->warga->kartuKeluarga->rt->id_rt;

        return view('RT.FasilitasUmum.create', compact('rts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required|max:100',
            'keterangan_fasilitas' => 'required',
            'alamat_fasilitas' => 'required|max:100',
            'gambar_fasilitas' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'link_maps' => 'required',
            'id_rt' => 'required',
        ]);

        // Handle the image upload to Cloudinary
        if ($request->hasFile('gambar_fasilitas')) {
            $image = $request->file('gambar_fasilitas');
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        } else {
            return back()->withErrors(['gambar_fasilitas' => 'Failed to upload image.']);
        }

        // Create the record in the database
        FasilitasUmumModel::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan_fasilitas' => $request->keterangan_fasilitas,
            'alamat_fasilitas' => $request->alamat_fasilitas,
            'gambar_fasilitas' => $result, // Save the Cloudinary URL
            'link_maps' => $request->link_maps,
            'id_rt' => $request->id_rt,
        ]);

        return redirect('/RT/FasilitasUmum')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fasilitasUmum = FasilitasUmumModel::find($id);

        return view('RT.FasilitasUmum.show', $data = ['data' => $fasilitasUmum]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rts = auth()->user()->warga->kartuKeluarga->rt->id_rt;
        $fasilitasUmum = FasilitasUmumModel::find($id);

        return view('RT.FasilitasUmum.edit', $data = ['data' => $fasilitasUmum], compact('rts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_fasilitas' => 'required|max:100',
            'keterangan_fasilitas' => 'required',
            'alamat_fasilitas' => 'required|max:100',
            'gambar_fasilitas' => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'link_maps' => 'required',
            'id_rt' => 'required',
        ]);

        // Find the existing record
        $fasilitas = FasilitasUmumModel::find($id);

        // If a new image is uploaded
        if ($request->hasFile('gambar_fasilitas')) {
            // Delete the old image from Cloudinary if it exists
            if ($fasilitas->gambar_fasilitas) {
                CloudinaryStorage::delete($fasilitas->gambar_fasilitas);
            }

            // Handle the new image upload to Cloudinary
            $image = $request->file('gambar_fasilitas');
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        } else {
            // If no new image is uploaded, keep the old image URL
            $result = $fasilitas->gambar_fasilitas;
        }

        $fasilitas->update([
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan_fasilitas' => $request->keterangan_fasilitas,
            'alamat_fasilitas' => $request->alamat_fasilitas,
            'gambar_fasilitas' => $result,
            'link_maps' => $request->link_maps,
            'id_rt' => $request->id_rt,
        ]);

        return redirect('/RT/FasilitasUmum')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = FasilitasUmumModel::find($id);
        if (!$check) {
            return redirect('/RT/FasilitasUmum')->with('error', 'Data tidak ditemukan');
        }

        // Delete the old image from Cloudinary if it exists
        if ($check->gambar_fasilitas) {
            CloudinaryStorage::delete($check->gambar_fasilitas);
        }

        try {
            FasilitasUmumModel::destroy($id);

            return redirect('/RT/FasilitasUmum')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RT/FasilitasUmum')->with('error', 'Data gagal dihapus');
        }
    }
}
