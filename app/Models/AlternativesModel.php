<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativesModel extends Model
{
    use HasFactory;

    protected $table = 'alternatives';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'no_kk',
        'kepala_keluarga',
    ];
}
