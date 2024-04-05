<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaduanModel extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';

    protected $fillable =
    [
        'id_warga',
        'judul_pengaduan',
        'deskripsi_pengaduan',
        'status_pengaduan',
        'tanggal_pengaduan',
    ];

    public function warga()
    {
        return $this->belongsTo(WargaModel::class, 'id_warga');
    }
}
