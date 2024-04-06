<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluargaModel extends Model
{
    use HasFactory;

    protected $table = 'kartu_keluarga';
    protected $primaryKey = 'id_kk';

    protected $fillable =
    [
        'id_rt',
        'no_kk',
    ];

    public function rt()
    {
        return $this->belongsTo(RtModel::class, 'id_rt');
    }

    public function warga()
    {
        return $this->hasMany(WargaModel::class, 'id_kk');
    }

    public function iuran()
    {
        return $this->hasMany(IuranModel::class, 'id_iuran');
    }
}
