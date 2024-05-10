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
        Schema::create('iuran', function (Blueprint $table) {
            $table->id('id_iuran');
            $table->unsignedBigInteger('id_kk')->index();
            $table->bigInteger('nominal');
            $table->string('status_iuran', 25);
            $table->date('tanggal_iuran');
            $table->timestamps();

            $table->foreign('id_kk')->references('id_kk')->on('kartu_keluarga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iuran');
    }
};
