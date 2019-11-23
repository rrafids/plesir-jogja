<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->string('nama', 255);
            $table->string('gambar', 255);
            $table->time('buka');
            $table->time('tutup');
            $table->string('hari', 255);
            $table->longText('deskripsi');
            $table->string('harga_tiket', 100);
            $table->string('tempat_umum', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
