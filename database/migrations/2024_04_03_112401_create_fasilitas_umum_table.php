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
        Schema::create('fasilitas_umum', function (Blueprint $table) {
            $table->id('id_fasilitas');
            $table->string('nama_fasilitas', 100);
            $table->longText('keterangan_fasilitas');
            $table->string('alamat_fasilitas', 100);
            $table->longText('gambar_fasilitas')->nullable();
            $table->longText('link_maps')->nullable();
            $table->unsignedBigInteger('id_rt')->index();
            $table->timestamps();

            $table->foreign('id_rt')->references('id_rt')->on('rt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas_umum');
    }
};
