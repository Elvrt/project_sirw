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
        Schema::create('t_pengajuan_surat', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->longText('deskripsi_pengajuan');
            $table->string('status_pengajuan', 25);
            $table->string('catatan', 50);
            $table->unsignedBigInteger('id_warga')->index();
            $table->unsignedBigInteger('id_jenis_surat')->index();
            $table->timestamps();

            $table->foreign('id_warga')->references('id_warga')->on('m_warga');
            $table->foreign('id_jenis_surat')->references('id_jenis_surat')->on('m_jenis_surat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengajuan_surat');
    }
};
