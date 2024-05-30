<?php

namespace App\Http\Controllers;

use App\Models\AgendaModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AgendaRTController extends Controller
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
        $agendaQuery = AgendaModel::query();

        if ($search) {
            $agendaQuery->where(function ($query) use ($search) {
                $query->where('judul_agenda', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi_agenda', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $agenda = $agendaQuery->orderBy('id_agenda', 'desc')->paginate($perPage);

        return view('RT.Agenda.index', ['agenda' => $agenda,'startNumber' => $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('RT.Agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_agenda' => 'required|max:100',
            'deskripsi_agenda' => 'required',
            'gambar_agenda' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'tanggal_agenda' => 'required|date',
        ]);

        // Handle the image upload
        if ($request->hasFile('gambar_agenda')) {
            $image = $request->file('gambar_agenda');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/agenda'), $imageName);
        } else {
            return back()->withErrors(['gambar_agenda' => 'Failed to upload image.']);
        }

        // Create the record in the database
        AgendaModel::create([
            'judul_agenda' => $request->judul_agenda,
            'deskripsi_agenda' => $request->deskripsi_agenda,
            'gambar_agenda' => $imageName,
            'tanggal_agenda' => $request->tanggal_agenda,
        ]);

        return redirect('/RT/Agenda')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agenda = AgendaModel::find($id);

        return view('RT.Agenda.show', $data = ['data' => $agenda]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agenda = AgendaModel::find($id);

        return view('RT.Agenda.edit', $data = ['data' => $agenda]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_agenda' => 'required|max:100',
            'deskripsi_agenda' => 'required',
            'gambar_agenda' => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'tanggal_agenda' => 'required|date',
        ]);

        // Find the existing record
        $agenda = AgendaModel::find($id);

        // If a new image is uploaded
        if ($request->hasFile('gambar_agenda')) {
            // Delete the old image if it exists
            if ($agenda->gambar_agenda && file_exists(public_path('assets/img/agenda/' . $agenda->gambar_agenda))) {
                unlink(public_path('assets/img/agenda/' . $agenda->gambar_agenda));
            }

            // Handle the new image upload
            $image = $request->file('gambar_agenda');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/agenda'), $imageName);
        } else {
            // If no new image is uploaded, keep the old image name
            $imageName = $agenda->gambar_agenda;
        }

        // Update the record in the database
        $agenda->update([
            'judul_agenda' => $request->judul_agenda,
            'deskripsi_agenda' => $request->deskripsi_agenda,
            'gambar_agenda' => $imageName,
            'tanggal_agenda' => $request->tanggal_agenda,
        ]);

        return redirect('/RT/Agenda')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = AgendaModel::find($id);
        if (!$check) {
            return redirect('/RT/Agenda')->with('error', 'Data tidak ditemukan');
        }

        // Delete the old image if it exists
        if ($check->gambar_agenda && file_exists(public_path('assets/img/agenda/' . $check->gambar_agenda))) {
            unlink(public_path('assets/img/agenda/' . $check->gambar_agenda));
        }

        try {
            AgendaModel::destroy($id);

            return redirect('/RT/Agenda')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RT/Agenda')->with('error', 'Data gagal dihapus');
        }
    }
}