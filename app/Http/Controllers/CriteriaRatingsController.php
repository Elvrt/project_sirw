<?php

namespace App\Http\Controllers;

use App\Models\CriteriaRatingsModel;
use App\Models\CriteriaWeightsModel;
use Illuminate\Http\Request;

class CriteriaRatingsController extends Controller
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
        $criteriaratings = CriteriaRatingsModel::leftJoin('criteriaweights', 'criteriaratings.criteria_id', '=', 'criteriaweights.id')
        ->select(
            'criteriaratings.id as id',
            'criteriaratings.criteria_id as cid',
            'criteriaratings.rating as rating',
            'criteriaratings.description as description',
            'criteriaweights.name as name')
        ->paginate($perPage);
        return view('RW.criteriaratings.index', compact('criteriaratings', 'startNumber'))->with('i', 0);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $criteriaweight = CriteriaWeightsModel::get();
        return view('RW.criteriaratings.create', compact('criteriaweight'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'criteria_id' => 'required',
            'rating' => 'required',
            'description' => 'required',
        ]);

        CriteriaRatingsModel::create($request->all());

        return redirect()->route('RW.criteriaratings.index')
                        ->with('success','Criteria created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CriteriaRatingsModel $criteriarating)
    {
        return view('RW.criteriaratings.edit',compact('criteriarating'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CriteriaRatingsModel $criteriarating)
    {
        $request->validate([
            'rating' => 'required',
            'description' => 'required',
        ]);

        $criteriarating->update($request->all());

        return redirect()->route('RW.criteriaratings.index')
                        ->with('success','Criteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriteriaRatingsModel $criteriarating)
    {
        try {
            $criteriarating->delete();

            return redirect()->route('RW.criteriaratings.index')
                            ->with('success','Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('RW.criteriaratings.index')
                            ->with('error', 'Data gagal dihapus');
        }
    }
}
