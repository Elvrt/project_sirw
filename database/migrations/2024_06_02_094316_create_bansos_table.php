<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bansos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rt')->references('id_rt')->on('rt'); // Ensure 'rts' is the name of your RT table
            $table->string('nomorkk');
            $table->integer('jumlah_tanggungan');
            $table->integer('jumlah_penghasilan');
            $table->string('gambar_slip')->nullable();
            $table->integer('jumlah_dayalistrik');
            $table->integer('luas_bangunan');
            $table->string('gambar_rumah')->nullable();
            $table->integer('jumlah_kendaraan');
            $table->string('gambar_kendaraan')->nullable();
            $table->text('keterangan_sktm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bansos');
    }
};
