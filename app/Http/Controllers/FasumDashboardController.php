<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmumModel;
use Illuminate\Http\Request;

class FasumDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas = FasilitasUmumModel::All();

        return view('Dashboard.fasum', ['fasilitas' => $fasilitas]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
