<?php

namespace App\Http\Controllers;

use App\Models\LayananDaruratModel;
use Illuminate\Http\Request;

class LayananDaruratDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = LayananDaruratModel::All();

        return view('Dashboard.layanandarurat', ['layanan' => $layanan]);
    }
}
