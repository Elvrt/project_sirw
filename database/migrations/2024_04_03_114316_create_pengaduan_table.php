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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->unsignedBigInteger('id_warga')->index();
            $table->string('judul_pengaduan', 50);
            $table->longText('deskripsi_pengaduan');
            $table->string('status_pengaduan', 25);
            $table->string('catatan_pengaduan', 100)->nullable();
            $table->longText('gambar_pengaduan')->nullable();
            $table->dateTime('tanggal_pengaduan');
            $table->timestamps();

            $table->foreign('id_warga')->references('id_warga')->on('warga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
