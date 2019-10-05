<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobby', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hby_name', 64);
            $table->text('hby_image');
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
        Schema::dropIfExists('hobby');
    }
}
