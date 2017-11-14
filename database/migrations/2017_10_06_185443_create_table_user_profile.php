<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_profile', function (Blueprint $table) {

            $table->increments('id');
            $table->string("avatar_path")->nullable();
            $table->string("address")->nullable();
            
            $table->string('conver_picture_path')->nullable();
            $table->string('go_code');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('allow_search')->default(1);
            $table->text('about')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('web_site')->nullable();
            $table->string('road')->nullable();
            $table->string('post_code')->nullable();
            $table->string("country")->nullable();
            $table->string('city')->nullable();
            $table->date('birth_day')->nullable();
            $table->integer('height_in_cm')->nullable();
            $table->integer('weight_in_kg')->nullable();

            $table->integer('dress_size')->nullable();
            $table->integer('shoe_size')->nullable();
            $table->string('brust_tail')->nullable();

            $table->string('eye_color')->nullable();
            $table->string("hair_color")->nullable();
            $table->string("skin_color")->nullable();
            $table->string('gender')->nullable();
            $table->integer('model_catgory')->unsigned()->nullable();
            $table->integer('Piercing')->default(0)->comment = "0 is no, 1 is yes";
            $table->integer('tattoo')->default(0)->comment = "0 is no, 1 is yes";
            $table->foreign('model_catgory')->references('id')->on('model_categories')->onDelete('set null');


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
        Schema::dropIfExists('user_profile');
    }
}
