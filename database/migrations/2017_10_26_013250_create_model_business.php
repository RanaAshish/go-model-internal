<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelBusiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('model_business', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->integer('user_id')->unsigned();
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->string('firm')->nullable();
            $table->text('note')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('model_business');
    }
}
