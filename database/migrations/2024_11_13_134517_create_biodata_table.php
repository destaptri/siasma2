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
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key ke tabel users
            $table->string('nisn', 10)->unique();
            $table->string('nama_lengkap');
            $table->string('kelas', 10);
            $table->year('tahun_lulus');
            $table->string('universitas')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('jalur_penerimaan')->nullable();
            $table->year('tahun_diterima')->nullable();
            $table->string('foto_pribadi')->nullable();
            $table->enum('status_validasi', ['Ya', 'Tidak'])->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biodata');
    }
};