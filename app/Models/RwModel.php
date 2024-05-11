<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RwModel extends Model
{
    use HasFactory;

    protected $table = 'rw';
    protected $primaryKey = 'id_rw';

    protected $fillable =
    [
        'nomor_rw',
        'id_rw',
    ];

    public function rw()
    {
        return $this->belongsTo(RtModel::class, 'id_rw');
    }
}
