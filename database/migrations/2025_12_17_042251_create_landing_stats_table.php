<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('landing_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('koleksi_buku')->default(0);
            $table->integer('dokumen_arsip')->default(0);
            $table->integer('anggota_aktif')->default(0);
            $table->integer('buku_dibaca')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('landing_stats');
    }
};
