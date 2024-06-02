<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bansos;
use App\Models\RtModel;

class BansosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rts = RtModel::all();
        return view('Dashboard.requestbansos',compact('rts'));;
        
    }
    public function create()
    {
        return view('bansos.create');
    }
    public function store(Request $request)
{
    $request->validate([
        'id_rt' => 'required|exists:rt,id_rt',
        'nomorkk' => 'required|numeric',
        'jumlah_tanggungan' => 'required|numeric',
        'jumlah_penghasilan' => 'required|numeric|between:0,9999999999',
        'gambar_slip' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'jumlah_dayalistrik' => 'required|numeric|between:0,9999999999',
        'luas_bangunan' => 'required|numeric|between:0,9999999999',
        'gambar_rumah' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'jumlah_kendaraan' => 'required|numeric|between:0,9999999999',
        'gambar_kendaraan' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'keterangan_sktm' => 'nullable|string',
    ]);

    $data = $request->all();

    if ($request->hasFile('gambar_slip')) {
        $data['gambar_slip'] = $request->file('gambar_slip')->store('uploads/bansos/slip', 'public');
    }

    if ($request->hasFile('gambar_rumah')) {
        $data['gambar_rumah'] = $request->file('gambar_rumah')->store('uploads/bansos/rumah', 'public');
    }

    if ($request->hasFile('gambar_kendaraan')) {
        $data['gambar_kendaraan'] = $request->file('gambar_kendaraan')->store('uploads/bansos/kendaraan', 'public');
    }

    Bansos::create($data);

    return redirect('/pengajuanbansos')->with('success', 'Pengajuan Bansos berhasil disimpan.');
}

    public function status(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $idRt = $request->query('id_rt');
        $status = $request->query('status');
        $search = $request->query('search');

        // Query the Bansos model based on the parameters
        $bansosQuery = Bansos::query();

        if ($idRt) {
            $bansosQuery->where('id_rt', $idRt);
        }

        if ($status) {
            $bansosQuery->where('status', $status);
        }

        if ($search) {
            $bansosQuery->where(function ($query) use ($search) {
                $query->where('nomorkk', 'like', '%' . $search . '%')
                    ->orWhere('keterangan_sktm', 'like', '%' . $search . '%');
            });
        }

        // Paginate the result
        $bansos = $bansosQuery->orderBy('id', 'desc')->paginate($perPage);

        $rts = RtModel::all();

        return view('Dashboard.statusbansos', ['bansos' => $bansos, 'rts' => $rts, 'startNumber' => $startNumber]);
    }
}
