<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->string('edu_name', 64);
            $table->text('edu_title');
            $table->text('edu_description');
            $table->date('edu_start');
            $table->date('edu_end');
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
        Schema::dropIfExists('education');
    }
}
