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
        Schema::create('t_pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->string('judul_pengaduan', 100);
            $table->longText('deskripsi_pengaduan');
            $table->string('status_pengaduan', 25);
            $table->unsignedBigInteger('id_warga')->index();
            $table->timestamps();

            $table->foreign('id_warga')->references('id_warga')->on('m_warga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengaduan');
    }
};
