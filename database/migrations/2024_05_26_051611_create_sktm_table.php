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
        Schema::create('sktm', function (Blueprint $table) {
            $table->id('id_sktm');
            $table->unsignedBigInteger('id_warga')->index();
            $table->longText('keterangan_sktm');
            $table->longText('gambar_rumah')->nullable();
            $table->bigInteger('jumlah_penghasilan');
            $table->longText('gambar_slip')->nullable();
            $table->bigInteger('jumlah_anggota');
            $table->bigInteger('jumlah_kendaraan');
            $table->longText('gambar_kendaraan')->nullable();
            $table->string('status_sktm', 25);
            $table->string('catatan_sktm', 100)->nullable();
            $table->dateTime('tanggal_sktm');
            $table->timestamps();

            $table->foreign('id_warga')->references('id_warga')->on('warga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sktm');
    }
};
