<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->string('kontak');
            $table->text('visi');
            $table->text('misi');
            $table->text('sejarah');
            $table->text('fasilitas');
            $table->text('prestasi');
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
        Schema::dropIfExists('biodata_sekolah');
    }
}
