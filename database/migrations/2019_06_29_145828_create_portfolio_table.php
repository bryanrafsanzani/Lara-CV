<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->increments('id');
            $table->text('prt_name');
            $table->text('prt_title');
            $table->text('prt_description');
            $table->text('prt_image');
            $table->date('prt_start');
            $table->date('prt_end');
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
        Schema::dropIfExists('portfolio');
    }
}
