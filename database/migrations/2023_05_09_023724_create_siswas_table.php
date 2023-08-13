<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
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
            $table->string('nisn')->unique();
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('tanggal_lahir');
            $table->enum('jenis_kelamin', [
                'Laki-laki',
                'Perempuan'
            ]);
            $table->string('nama_file')->default('assets/img/default-picture/profile-1.jpeg');
            $table->string('ori_nama_file')->default('assets/img/default-picture/profile-1.jpeg');
            $table->timestamps();
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
