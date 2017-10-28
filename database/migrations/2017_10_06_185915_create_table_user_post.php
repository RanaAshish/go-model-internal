<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_post', function (Blueprint $table) {

            $table->increments('id');
            $table->longText("post_content");
            $table->string('comment_status');
            $table->string('post_status');
            $table->string("post_title");
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('header_img')->nullable();
            $table->integer('admin_status');
            $table->bigInteger('view_count')->default(0);    
            $table->timestamps();
            $table->integer("user_id")->unsigned()->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('post_category')->onDelete('set null');


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
        Schema::dropIfExists('user_post');
    }
}
