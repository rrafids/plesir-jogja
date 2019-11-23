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
            $table->varchar('nama', 255);
            $table->varchar('gambar', 255);
            $table->time('buka');
            $table->time('tutup');
            $table->varchar('hari', 255);
            $table->longText('deskripsi');
            $table->integer('harga_tiket', 100);
            $table->varchar('tempat_umum', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_places');
    }
}
