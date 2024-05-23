<?php

namespace App\Http\Controllers;

use App\Models\StrukturRwModel;
use App\Models\TataTertibModel;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $strukturRw = StrukturRwModel::limit(4)->get();
        $ketuaRt = StrukturRwModel::where('id_struktur', '>=', 5)->get();
        $tatib = TataTertibModel::All();

        return view('Dashboard.profil', ['strukturRw' => $strukturRw, 'ketuaRt' => $ketuaRt, 'tatib' => $tatib]);
    }
}
