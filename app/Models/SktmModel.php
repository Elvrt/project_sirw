<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SktmModel extends Model
{
    use HasFactory;

    protected $table = 'sktm';
    protected $primaryKey = 'id_sktm';

    protected $fillable =
    [
        'id_warga',
        'keterangan_sktm',
        'gambar_rumah',
        'jumlah_penghasilan',
        'gambar_slip',
        'jumlah_anggota',
        'jumlah_kendaraan',
        'gambar_kendaraan',
        'status_sktm',
        'tanggal_sktm',
        'catatan_sktm',

    ];

    public function warga()
    {
        return $this->belongsTo(WargaModel::class, 'id_warga');
    }
}
