<?php

namespace App\Http\Controllers;

use App\Models\AlternativesModel;
use App\Models\AlternativeScoresModel;
use App\Models\CriteriaWeightsModel;
use App\Models\CriteriaRatingsModel;
use Illuminate\Http\Request;

class AlternativesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;
        $scores = AlternativeScoresModel::select(
            'alternativescores.id as id',
            'alternatives.id as ida',
            'criteriaweights.id as idw',
            'criteriaratings.id as idr',
            'alternatives.no_kk as no_kk',
            'alternatives.kepala_keluarga as kepala_keluarga',
            'criteriaweights.name as criteria',
            'criteriaratings.rating as rating',
            'criteriaratings.description as description')
        ->leftJoin('alternatives', 'alternatives.id', '=', 'alternativescores.alternative_id')
        ->leftJoin('criteriaweights', 'criteriaweights.id', '=', 'alternativescores.criteria_id')
        ->leftJoin('criteriaratings', 'criteriaratings.id', '=', 'alternativescores.rating_id')
        ->get();

        $alternatives = AlternativesModel::paginate($perPage);

        $criteriaweights = CriteriaWeightsModel::get();
        return view('RW.alternatives.index', compact('scores', 'alternatives', 'criteriaweights', 'startNumber'))->with('i', 0);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $criteriaweights = CriteriaWeightsModel::get();
        $criteriaratings = CriteriaRatingsModel::get();
        return view('RW.alternatives.create', compact('criteriaweights', 'criteriaratings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'required|max:16|unique:alternatives,no_kk',
            'kepala_keluarga' => 'required',
        ]);
        // Dapatkan semua bobot kriteria
        $criteriaweights = CriteriaWeightsModel::all();

        // Persiapkan aturan validasi untuk setiap kriteria
        $rules = [];
        foreach ($criteriaweights as $cw) {
            $rules['criteria.' . $cw->id] = 'required';
        }

        // Validasi input kriteria
        $request->validate($rules);

        // Save the alternative
        $alt = new AlternativesModel();
        $alt->no_kk = $request->no_kk;
        $alt->kepala_keluarga = $request->kepala_keluarga;
        $alt->save();

        // Save the score
        $criteriaweight = CriteriaWeightsModel::get();
        foreach ($criteriaweight as $cw) {
            $score = new AlternativeScoresModel();
            $score->alternative_id = $alt->id;
            $score->criteria_id = $cw->id;
            $score->rating_id = $request->input('criteria')[$cw->id];
            $score->save();
        }

        return redirect()->route('RW.alternatives.index')
            ->with('success', 'Data berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AlternativesModel $alternative)
    {
        $criteriaweights = CriteriaWeightsModel::get();
        $criteriaratings = CriteriaRatingsModel::get();
        $alternativescores = AlternativeScoresModel::where('alternative_id', $alternative->id)->get();
        return view('RW.alternatives.edit', compact('alternative', 'alternativescores', 'criteriaweights', 'criteriaratings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AlternativesModel $alternative)
    {
        $scores = AlternativeScoresModel::where('alternative_id', $alternative->id)->get();
        $criteriaweight = CriteriaWeightsModel::get();
        foreach ($criteriaweight as $key => $cw) {
            $scores[$key]->rating_id = $request->input('criteria')[$cw->id];
            $scores[$key]->save();
        }

        return redirect()->route('RW.alternatives.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AlternativesModel $alternative)
    {
        try {
            $scores = AlternativeScoresModel::where('alternative_id', $alternative->id)->delete();
            $alternative->delete();

            return redirect()->route('RW.alternatives.index')
                            ->with('success','Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('RW.alternatives.index')
                            ->with('error', 'Data gagal dihapus');
        }
    }
}
