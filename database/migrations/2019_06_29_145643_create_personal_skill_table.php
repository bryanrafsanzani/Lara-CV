<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_skill', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prs_name', 64);
            $table->tinyInteger('prs_rate')->nullable();
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
        Schema::dropIfExists('personal_skill');
    }
}
