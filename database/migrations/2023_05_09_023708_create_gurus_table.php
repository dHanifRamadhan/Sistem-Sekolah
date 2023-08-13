<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_profile');
            $table->string('nip')->unique();
            $table->string('email')->unique();
            $table->string('nomor_telepon');
            $table->text('alamat');
            $table->string('tanggal_lahir');
            $table->enum('jenis_kelamin', [
                'Laki-laki',
                'Perempuan'
            ]);
            $table->string('path')->nullable();
            $table->string('ori_nama_file')->nullable();
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
        Schema::dropIfExists('gurus');
    }
}
