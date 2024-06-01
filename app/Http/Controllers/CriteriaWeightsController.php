<?php

namespace App\Http\Controllers;

use App\Models\CriteriaWeightsModel;
use Illuminate\Http\Request;

class CriteriaWeightsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;
        $criteriaweights = CriteriaWeightsModel::paginate($perPage);
        return view('RW.criteriaweights.index', compact('criteriaweights', 'startNumber'))->with('i', 0);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('RW.criteriaweights.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'type' => 'required',
            'weight' => 'required',
            'description' => 'required|max:200',
        ]);

        CriteriaWeightsModel::create($request->all());

        return redirect()->route('RW.criteriaweights.index')
                        ->with('success','Data berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CriteriaWeightsModel $criteriaweight)
    {
        return view('RW.criteriaweights.edit',compact('criteriaweight'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CriteriaWeightsModel $criteriaweight)
    {
        $request->validate([
            'name' => 'required|max:100',
            'type' => 'required',
            'weight' => 'required',
            'description' => 'required|max:200',
        ]);

        $criteriaweight->update($request->all());

        return redirect()->route('RW.criteriaweights.index')
                        ->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriteriaWeightsModel $criteriaweight)
    {
        try {
            $criteriaweight->delete();

            return redirect()->route('RW.criteriaweights.index')
                            ->with('success','Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('RW.criteriaweights.index')
                            ->with('error', 'Data gagal dihapus');
        }
    }
}
