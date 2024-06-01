<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriaRatingsModel extends Model
{
    use HasFactory;

    protected $table = 'criteriaratings';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'criteria_id',
        'rating',
        'description',
    ];
}
