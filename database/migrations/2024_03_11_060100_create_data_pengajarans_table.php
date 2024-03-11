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
        Schema::create('data_pengajarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anggota_rombel_id');
            $table->unsignedBigInteger('guru_id');
            $table->string('pelajaran');
            $table->text('subject');
            $table->integer('waktu_pelajaran');
            $table->time('mulai_pada');
            $table->time('berakhir_pada');
            $table->date('tanggal_pelajaran');
            $table->timestamps();

            $table->foreign('anggota_rombel_id')->references('id')->on('data_anggota_rombels')->onDelete('cascade');
            $table->foreign('guru_id')->references('id')->on('data_gurus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pengajarans');
    }
};
