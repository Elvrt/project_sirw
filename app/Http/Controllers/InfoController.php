<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use App\Models\AgendaModel;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = BeritaModel::orderBy('id_berita', 'desc')->limit(6)->get();
        $agenda = AgendaModel::orderBy('id_agenda', 'desc')->limit(6)->get();

        return view('Dashboard.info', ['berita' => $berita, 'agenda' => $agenda]);
    }

    /**
     * Display the specified resource.
     */
    public function showAgenda(string $id)
    {
        $agenda = AgendaModel::find($id);

        return view('Dashboard.agenda', $data = ['data' => $agenda]);
    }

    public function showBerita(string $id)
    {
        $berita = BeritaModel::find($id);

        return view('Dashboard.berita', $data = ['data' => $berita]);
    }
}
