<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingStat extends Model
{
    use HasFactory;

    protected $table = 'landing_stats';

    protected $fillable = [
        'koleksi_buku',
        'dokumen_arsip',
        'anggota_aktif',
        'buku_dibaca',
    ];
}
