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
        $berita = BeritaModel::orderBy('created_at', 'desc')->limit(3)->get();
        $agenda = AgendaModel::orderBy('created_at', 'desc')->limit(2)->get();
        $fasilitas = FasilitasUmumModel::orderBy('created_at', 'desc')->limit(3)->get();

        return view('Dashboard.dashboard', ['berita' => $berita, 'agenda' => $agenda, 'fasilitas' => $fasilitas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
