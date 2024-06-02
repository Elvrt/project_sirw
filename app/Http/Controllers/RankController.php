<?php

namespace App\Http\Controllers;

use App\Models\AlternativesModel;
use App\Models\AlternativeScoresModel;
use App\Models\CriteriaWeightsModel;
use Illuminate\Http\Request;

class RankController extends Controller
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
            'criteriaratings.description as description'
        )
            ->leftJoin('alternatives', 'alternatives.id', '=', 'alternativescores.alternative_id')
            ->leftJoin('criteriaweights', 'criteriaweights.id', '=', 'alternativescores.criteria_id')
            ->leftJoin('criteriaratings', 'criteriaratings.id', '=', 'alternativescores.rating_id')
            ->get();

        // duplicate scores object to get rating value later,
        // because any call to $scores object is pass by reference
        // clone, replica, tobase didnt work
        $cscores = AlternativeScoresModel::select(
            'alternativescores.id as id',
            'alternatives.id as ida',
            'criteriaweights.id as idw',
            'criteriaratings.id as idr',
            'alternatives.no_kk as no_kk',
            'alternatives.kepala_keluarga as no_kk',
            'criteriaweights.name as criteria',
            'criteriaratings.rating as rating',
            'criteriaratings.description as description'
        )
            ->leftJoin('alternatives', 'alternatives.id', '=', 'alternativescores.alternative_id')
            ->leftJoin('criteriaweights', 'criteriaweights.id', '=', 'alternativescores.criteria_id')
            ->leftJoin('criteriaratings', 'criteriaratings.id', '=', 'alternativescores.rating_id')
            ->get();

        $alternatives = AlternativesModel::get();
        $criteriaweights = CriteriaWeightsModel::get();

        // Normalization
        foreach ($alternatives as $a) {
            // Get all scores for each alternative id
            $afilter = $scores->where('ida', $a->id)->values()->all();
            // Loop each criteria
            foreach ($criteriaweights as $icw => $cw) {
                // Get all rating value for each criteria
                $rates = $cscores->map(function ($val) use ($cw) {
                    if ($cw->id == $val->idw) {
                        return $val->rating;
                    }
                })->toArray();

                // array_filter for removing null value caused by map,
                // array_values for reindex the array
                $rates = array_values(array_filter($rates));

                if ($cw->type == 'benefit') {
                    $result = $afilter[$icw]->rating / max($rates);
                } elseif ($cw->type == 'cost') {
                    $result = min($rates) / $afilter[$icw]->rating;
                }
                $result *= $cw->weight;
                $afilter[$icw]->rating = round($result, 2);
            }
        }

        // Calculate total scores for each alternative
        $alternativeScores = $alternatives->map(function ($alternative) use ($scores) {
            $alternative->total = $scores->where('ida', $alternative->id)->sum('rating');
            return $alternative;
        });

        // Sort alternatives by total score in descending order
        $sortedAlternatives = $alternativeScores->sortByDesc('total')->values();

        return view('RW.rank.index', compact('scores', 'sortedAlternatives', 'criteriaweights'))->with('i', 0);
    }
}
