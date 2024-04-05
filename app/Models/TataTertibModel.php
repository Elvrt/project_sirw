<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TataTertibModel extends Model
{
    use HasFactory;

    protected $table = 'tata_tertib';
    protected $primaryKey = 'id_tatib';

    protected $fillable =
    [
        'deskripsi_tatib',
    ];
}
