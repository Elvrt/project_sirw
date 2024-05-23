<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use App\Models\AgendaModel;
use App\Models\FasilitasUmumModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = BeritaModel::orderBy('id_berita', 'desc')->limit(3)->get();
        $agenda = AgendaModel::orderBy('id_agenda', 'desc')->limit(2)->get();
        $fasilitas = FasilitasUmumModel::orderBy('id_fasilitas', 'desc')->limit(3)->get();

        return view('Dashboard.dashboard', ['berita' => $berita, 'agenda' => $agenda, 'fasilitas' => $fasilitas]);
    }
}
