<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananDaruratModel extends Model
{
    use HasFactory;

    protected $table = 'layanan_darurat';
    protected $primaryKey = 'id_layanan';

    protected $fillable =
    [
        'nama_layanan',
        'nomor_layanan',
    ];
}
