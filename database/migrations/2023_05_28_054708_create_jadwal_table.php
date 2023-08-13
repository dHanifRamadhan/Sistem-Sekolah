<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->unsignedBigInteger('jam_pelajaran_id')->nullable();
            $table->unsignedBigInteger('guru_id')->nullable();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('mata_pelajaran_id')->nullable();
            $table->unsignedBigInteger('ruangan_kelas_id')->nullable();
            $table->timestamps();

            // Relasi 
            $table->foreign('jam_pelajaran_id')->references('id')->on('jam_pelajarans')->onDelete('set null');
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('set null');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajarans')->onDelete('set null');
            $table->foreign('ruangan_kelas_id')->references('id')->on('ruangan_kelas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
