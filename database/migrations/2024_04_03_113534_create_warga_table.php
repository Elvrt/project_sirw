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
        Schema::create('warga', function (Blueprint $table) {
            $table->id('id_warga');
            $table->unsignedBigInteger('id_kk')->index();
            $table->string('nik', 16)->unique();
            $table->string('nama_warga', 100);
            $table->string('jenis_kelamin', 1);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('alamat', 100);
            $table->string('nomor_telepon', 15)->unique()->nullable();
            $table->string('agama', 20);
            $table->string('pekerjaan', 40);
            $table->bigInteger('penghasilan');
            $table->string('status_hubungan', 25);
            $table->timestamps();

            $table->foreign('id_kk')->references('id_kk')->on('kartu_keluarga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};
