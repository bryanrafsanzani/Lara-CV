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
            $table->increments('id');
            $table->string('name', 64);
            $table->text('picture');
            $table->text('address');
            $table->string('phone', 64);
            $table->string('email', 64);
            $table->text('about_me');
            $table->text('social_media');
            $table->text('github');
            $table->string('gender', 1);     
            $table->date('birth');
            $table->unsignedInteger('login_id')->index();
   
            $table->foreign('login_id')
            ->references('id')->on('login')
            ->onDelete('cascade');
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
