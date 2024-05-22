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
        Schema::create('jadwal_matakuliah', function (Blueprint $table) {
            
            $table->string('npm')->nullable();
            $table->unsignedBigInteger('id_prodi')->nullable();
            $table->unsignedBigInteger('id_matakuliah')->nullable();
            $table->foreign('npm')->references('npm')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('id_prodi')->references('id_prodi')->on('prodi')->onDelete('cascade');
            $table->foreign('id_matakuliah')->references('id_matakuliah')->on('matakuliah')->onDelete('cascade');
            $table->time('jam');
            $table->string('ruangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_matakuliah');
    }
};
