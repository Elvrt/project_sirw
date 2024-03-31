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
        Schema::create('m_agenda', function (Blueprint $table) {
            $table->id('id_agenda');
            $table->string('judul_agenda', 100);
            $table->longText('deskripsi_agenda');
            $table->string('gambar_agenda', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_agenda');
    }
};
