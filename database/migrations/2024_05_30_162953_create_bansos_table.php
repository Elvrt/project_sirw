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
        Schema::create('bansos', function (Blueprint $table) {
            $table->id('id_bansos');
            $table->unsignedBigInteger('id_warga')->index();
            $table->decimal('npwp', 15, 3);
            $table->decimal('luas_tanah', 15, 3);
            $table->decimal('tagihan_listrik', 15, 3);
            $table->unsignedBigInteger('gaji');
            $table->unsignedBigInteger('jumlah_tanggungan');
            $table->unsignedBigInteger('jumlah_kendaraan');
            $table->dateTime('tanggal_bansos');
            $table->timestamps();

            $table->foreign('id_warga')->references('id_warga')->on('warga');
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
