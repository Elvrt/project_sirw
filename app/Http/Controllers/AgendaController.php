<?php

namespace App\Http\Controllers;

use App\Models\AgendaModel;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AgendaModel::all();

        return view('RW.Agenda.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('RW.Agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AgendaModel::create([
            'judul_agenda' => $request->judul_agenda,
            'deskripsi_agenda' => $request->deskripsi_agenda,
            'gambar_agenda' => '',
            'tanggal_agenda' => $request->tanggal_agenda,
        ]);

        return redirect('/RW/Agenda')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agenda = AgendaModel::find($id);

        return view('RW.Agenda.show', $data = ['data' => $agenda]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agenda = AgendaModel::find($id);

        return view('RW.Agenda.edit', $data = ['data' => $agenda]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = AgendaModel::find($id);

        $data->update([
            'judul_agenda' => $request->judul_agenda,
            'deskripsi_agenda' => $request->deskripsi_agenda,
            'gambar_agenda' => '',
            'tanggal_agenda' => $request->tanggal_agenda,
        ]);

        return redirect('/RW/Agenda')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            AgendaModel::destroy($id);

            return redirect('/RW/Agenda')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('RW/Agenda')->with('error', 'Data gagal dihapus');
        }
    }
}
