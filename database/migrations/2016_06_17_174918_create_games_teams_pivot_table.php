<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTeamsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games_teams', function (Blueprint $table) {
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('team_id');

            $table->primary(['game_id', 'team_id']);

            $table->foreign('game_id')->references('id')->on('games')
                ->onUpdated('cascade')
                ->onDelete('cascade');

            $table->foreign('team_id')->references('id')->on('teams')
                ->onUpdated('cascade')
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
        Schema::table('games_teams', function (Blueprint $table) {
                    //
                    $table->dropForeign('games_teams_game_id_foreign');
                    $table->dropForeign('games_teams_team_id_foreign');
                });
        Schema::drop('games_teams');
    }
}
