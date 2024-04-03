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
        Schema::create('struktur_rw', function (Blueprint $table) {
            $table->id('id_struktur');
            $table->string('kode_struktur', 3)->unique();
            $table->string('nama_struktur', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('struktur_rw');
    }
};
