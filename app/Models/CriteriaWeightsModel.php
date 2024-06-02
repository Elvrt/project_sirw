<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriaWeightsModel extends Model
{
    use HasFactory;

    protected $table = 'criteriaweights';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'name',
        'type',
        'weight',
        'description',
    ];
}
