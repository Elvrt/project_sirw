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
        Schema::create('persuratan', function (Blueprint $table) {
            $table->id('id_persurataan');
            $table->unsignedBigInteger('id_warga')->index();
            $table->string('jenis_persuratan', 30);
            $table->longText('keterangan_persuratan');
            $table->string('status_persuratan', 25);
            $table->dateTime('tanggal_persuratan');
            $table->timestamps();

            $table->foreign('id_warga')->references('id_warga')->on('warga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persuratan');
    }
};
