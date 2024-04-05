<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturRwModel extends Model
{
    use HasFactory;

    protected $table = 'struktur_rw';
    protected $primaryKey = 'id_struktur';

    protected $fillable =
    [
        'kode_struktur',
        'nama_struktur',
        'id_warga',
    ];

    public function warga()
    {
        return $this->belongsTo(WargaModel::class, 'id_warga');
    }
}
