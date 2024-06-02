<?php

namespace App\Http\Controllers;

use App\Models\Bansos;
use App\Models\RtModel;
use Illuminate\Http\Request;

class BansosDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rts = RtModel::all();
        return view('Dashboard.pengajuanbansos');
    }
    
}