<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $primaryKey = 'id_berita';

    protected $fillable =
    [
        'judul_berita',
        'deskripsi_berita',
        'gambar_berita',
        'tanggal_berita',
    ];
}
