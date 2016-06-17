<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Game;
use App\Goal;
use App\Player;

class Team extends Model
{
    protected $fillable = [
        'name',
        'points'
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'games_teams','team_id', 'game_id');
    };

    public function goals()
    {
        return $this->hasMany('App\Goal');
    };

    public function players()
    {
        return $this->hasMany('App\Player');
    };
}
