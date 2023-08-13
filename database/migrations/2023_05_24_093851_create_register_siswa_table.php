<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->default('tes');
            $table->string('nama_profile')->default('tes');
            $table->string('nisn')->unique()->default('tes');
            $table->string('email')->unique()->default('tes');
            $table->string('password')->default('tes');
            $table->string('alamat')->default('tes');
            $table->string('nomor_telepon')->default('tes');
            $table->string('tanggal_lahir')->default('tes');
            $table->enum('jenis_kelamin', [
                'Laki-laki',
                'Perempuan'
            ])->default('Laki-laki');
            $table->unsignedBigInteger('hobi_id')->nullable();
            $table->string('path')->nullable();
            $table->string('ori_nama_file')->nullable();
            $table->timestamps();

            // Untuk relasi
            $table->foreign('hobi_id')->references('id')->on('hobi')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_siswa');
    }
}
