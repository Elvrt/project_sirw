<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasUmumModel extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_umum';
    protected $primaryKey = 'id_fasilitas';

    protected $fillable =
    [
        'nama_fasilitas',
        'keterangan_fasilitas',
        'alamat_fasilitas',
        'gambar_fasilitas',
        'id_rt',
    ];

    public function rt()
    {
        return $this->belongsTo(RtModel::class, 'id_rt');
    }
}
