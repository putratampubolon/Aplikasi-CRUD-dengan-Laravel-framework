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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('no_ktp')->unique();
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('nama_sekolah');
            $table->string('jurusan');
            $table->string('perusahaan');
            $table->string('jabatan');
            $table->integer('tahun_masuk');
            $table->integer('tahun_lulus');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
