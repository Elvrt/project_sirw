<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IuranModel extends Model
{
    use HasFactory;

    protected $table = 'iuran';
    protected $primaryKey = 'id_iuran';

    protected $fillable =
    [
        'id_kk',
        'nominal',
        'status_iuran',
        'tanggal_iuran'
    ];

    public function kartuKeluarga()
    {
        return $this->belongsTo(KartuKeluargaModel::class, 'id_kk');
    }
}
