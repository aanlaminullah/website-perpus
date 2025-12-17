<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LensaKegiatan extends Model
{
    use HasFactory;

    protected $table = 'lensa_kegiatans';
    protected $fillable = [
        'foto',
        'keterangan',
        'tanggal',
    ];
}
