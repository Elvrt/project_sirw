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
        Schema::create('t_pembayaran_iuran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->bigInteger('nominal_pembayaran');
            $table->string('status_pembayaran', 25);
            $table->unsignedBigInteger('id_kk')->index();
            $table->timestamps();

            $table->foreign('id_kk')->references('id_kk')->on('m_kartu_keluarga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pembayaran_iuran');
    }
};
