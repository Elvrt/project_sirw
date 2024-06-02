<?php

namespace App\Http\Controllers;

use App\Models\Bansos;
use Illuminate\Http\Request;

class BansosRTController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $status = $request->query('status');
        $search = $request->query('search');

        // Query the Bansos model based on the parameters
        $bansosQuery = Bansos::query();

        // Filter by status if provided
        if ($status) {
            $bansosQuery->where('status', $status);
        }

        // Search query
        if ($search) {
            $bansosQuery->where(function ($query) use ($search) {
                $query->where('nomorkk', 'like', '%' . $search . '%')
                    ->orWhere('jumlah_tanggungan', 'like', '%' . $search . '%')
                    ->orWhere('jumlah_penghasilan', 'like', '%' . $search . '%')
                    ->orWhere('keterangan_sktm', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $bansos = $bansosQuery->paginate($perPage);

        return view('RT.Bansos.index', compact('bansos', 'startNumber'));
    }

}
