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
        Schema::create('data_rombels', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rombel');
            $table->unsignedBigInteger('tahun_pelajaran_id');
            $table->timestamps();

            $table->foreign('tahun_pelajaran_id')->references('id')->on('data_tahun_pelajarans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_rombels');
    }
};
