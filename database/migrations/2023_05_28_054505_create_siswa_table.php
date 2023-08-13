<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_profile');
            $table->string('nisn')->unique();
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('tanggal_lahir');
            $table->enum('jenis_kelamin', [
                'Laki-laki',
                'Perempuan'
            ]);
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
        Schema::dropIfExists('siswas');
    }
}
