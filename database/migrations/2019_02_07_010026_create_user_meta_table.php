<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMetaTable extends Migration
{
    public function up()
    {
        Schema::create('user_meta', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('language')->nullable();
            $table->string('theme')->nullable();

            $table->enum('gender', ['male', 'female', ''])->nullable();
            $table->date('birth')->nullable();

            $table->string('avatar')->nullable();
            $table->string('headline')->nullable();

            $table->string('position')->nullable();
            $table->string('company')->nullable();

            $table->string('country')->nullable();
            $table->string('city')->nullable();

            $table->text('summary')->nullable();
            $table->string('interests')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('github')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('user_meta');
    }
}
