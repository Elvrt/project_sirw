<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_rt',
        'nomorkk',
        'jumlah_tanggungan',
        'jumlah_penghasilan',
        'gambar_slip',
        'jumlah_dayalistrik',
        'luas_bangunan',
        'gambar_rumah',
        'jumlah_kendaraan',
        'gambar_kendaraan',
        'keterangan_sktm',
        'status',
    ];
}
