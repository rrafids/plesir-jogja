<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('object_id')->unsigned();
            $table->decimal('rating');
            $table->string('content');
            $table->timestamps();
        });
        Schema::table('comments', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('object_id')->references('id')->on('places');
        });   
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
