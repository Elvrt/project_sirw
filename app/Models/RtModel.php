<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RtModel extends Model
{
    use HasFactory;

    protected $table = 'rt';
    protected $primaryKey = 'id_rt';

    protected $fillable =
    [
        'nomor_rt',
    ];
}
