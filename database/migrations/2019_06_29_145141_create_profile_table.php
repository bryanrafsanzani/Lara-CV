<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('profile_id');
            $table->string('name', 64);
            $table->text('address');
            $table->string('phone', 64);
            $table->string('email', 64);
            $table->text('about_me');
            $table->text('social_media');
            $table->text('github');
            $table->string('username', 64);        
        });


        Schema::table('profile', function($table){
            $table->foreign('username')->references('username')->on('login')->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
