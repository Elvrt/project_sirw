<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WargaModel extends Model
{
    use HasFactory;

    protected $table = 'warga';
    protected $primaryKey = 'id_warga';

    protected $fillable =
    [
        'id_kk',
        'nik',
        'nama_warga',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'nomor_telepon',
        'agama',
        'pekerjaan',
        'penghasilan',
        'status_hubungan',
    ];

    public function kartuKeluarga()
    {
        return $this->belongsTo(KartuKeluargaModel::class, 'id_kk');
    }
}
