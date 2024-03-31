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
        Schema::create('m_warga', function (Blueprint $table) {
            $table->id('id_warga');
            $table->string('nik', 16)->unique();
            $table->string('nama_warga', 100);
            $table->string('jenis_kelamin', 2);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('nomor_telepon', 15);
            $table->string('agama', 25);
            $table->bigInteger('penghasilan');
            $table->string('username', 50)->unique();
            $table->longText('password');
            $table->unsignedBigInteger('id_kk')->index();
            $table->unsignedBigInteger('id_level')->index();
            $table->unsignedBigInteger('id_struktur')->index();
            $table->timestamps();

            $table->foreign('id_kk')->references('id_kk')->on('m_kartu_keluarga');
            $table->foreign('id_level')->references('id_level')->on('m_level');
            $table->foreign('id_struktur')->references('id_struktur')->on('m_struktur_rw');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_warga');
    }
};
