<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativesCoresModel extends Model
{
    use HasFactory;

    protected $table = 'alternativescores';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'alternative_id',
        'criteria_id',
        'rating_id',
    ];
}
