<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exp_name', 64);
            $table->text('exp_title');
            $table->text('exp_description');
            $table->text('exp_image');
            $table->date('exp_start');
            $table->date('exp_end');
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
        Schema::dropIfExists('experience');
    }
}
