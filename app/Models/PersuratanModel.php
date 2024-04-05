<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersuratanModel extends Model
{
    use HasFactory;

    protected $table = 'persuratan';
    protected $primaryKey = 'id_persuratan';

    protected $fillable =
    [
        'id_warga',
        'jenis_persuratan',
        'keterangan_persuratan',
        'status_persuratan',
        'tanggal_persuratan',
    ];

    public function warga()
    {
        return $this->belongsTo(WargaModel::class, 'id_warga');
    }
}
