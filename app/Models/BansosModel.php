<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BansosModel extends Model
{
    use HasFactory;

    protected $table = 'bansos';
    protected $primaryKey = 'id_bansos';

    protected $fillable =
    [
        'id_warga',
        'npwp',
        'luas_tanah',
        'tagihan_listrik',
        'gaji',
        'jumlah_tanggungan',
        'jumlah_kendaraan',
        'tanggal_bansos'
    ];

    public function warga()
    {
        return $this->belongsTo(WargaModel::class, 'id_warga');
    }
}
