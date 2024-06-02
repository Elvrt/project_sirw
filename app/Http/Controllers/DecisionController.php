<?php

namespace App\Http\Controllers;

use App\Models\AlternativesModel;
use App\Models\AlternativeScoresModel;
use App\Models\CriteriaWeightsModel;
use Illuminate\Http\Request;

class DecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scores = AlternativeScoresModel::select(
            'alternativescores.id as id',
            'alternatives.id as ida',
            'criteriaweights.id as idw',
            'criteriaratings.id as idr',
            'alternatives.no_kk as no_kk',
            'alternatives.kepala_keluarga as no_kk',
            'criteriaweights.name as criteria',
            'criteriaratings.rating as rating',
            'criteriaratings.description as description')
        ->leftJoin('alternatives', 'alternatives.id', '=', 'alternativescores.alternative_id')
        ->leftJoin('criteriaweights', 'criteriaweights.id', '=', 'alternativescores.criteria_id')
        ->leftJoin('criteriaratings', 'criteriaratings.id', '=', 'alternativescores.rating_id')
        ->get();

        $alternatives = AlternativesModel::get();

        $criteriaweights = CriteriaWeightsModel::get();

        return view('RW.decision.index', compact('scores', 'alternatives', 'criteriaweights'))->with('i', 0);
    }
}
