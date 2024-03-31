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
        Schema::create('m_berita', function (Blueprint $table) {
            $table->id('id_berita');
            $table->string('judul_berita', 100);
            $table->longText('deskripsi_berita');
            $table->string('gambar_berita', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_berita');
    }
};
