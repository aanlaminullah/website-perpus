<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('strukturs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');       // nama jabatan/pegawai
            $table->string('jabatan');    // jabatan
            $table->unsignedBigInteger('parent_id')->nullable(); // parent untuk hierarki
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('strukturs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strukturs');
    }
};
