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
        Schema::create('m_kartu_keluarga', function (Blueprint $table) {
            $table->id('id_kk');
            $table->string('no_kk', 16)->unique();
            $table->string('alamat_kk', 100);
            $table->unsignedBigInteger('id_rt')->index();
            $table->timestamps();

            $table->foreign('id_rt')->references('id_rt')->on('m_rt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kartu_keluarga');
    }
};
