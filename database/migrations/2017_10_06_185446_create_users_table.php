<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('profile_id')->unsigned()->nullable();
            $table->integer('role')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('role')->references('id')->on('user_role')->onDelete('set null');
            $table->foreign('profile_id')->references('id')->on('user_profile')->onDelete('set null');
            $table->string('user_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
