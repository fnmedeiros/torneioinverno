<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id')->unsingned;
            $table->date('begin_first_time');
            $table->date('end_first_time');
            $table->date('begin_second_time');
            $table->date('end_second_time');
            $table->integer('extension');
            $table->boolean('penalty');
            $table->date('date');
            $table->time('hour');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('games');
    }
}
