<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winners', function (Blueprint $table) {
            $table->increments('id')->unsingned;
            $table->unsignedInteger('game_id');
            $table->foreign('game_id')->references('id')->on('games');
            $table->unsignedInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->boolean('tie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('winners', function (Blueprint $table) {
                    $table->dropForeign('winner_game_id_foreign');
                    $table->dropForeign('winner_team_id_foreign');
                    $table->dropForeign('winner_player_id_foreign');
                });

        Schema::drop('winners');
    }
}
