<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('object_id')->unsigned();
            $table->string('kode_pembayaran');
            $table->string('kode_tiket');
        });
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('object_id')->references('id')->on('places');
        });
    }

    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
