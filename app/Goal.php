<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;
use App\Player;
use App\Team;

class Goal extends Model
{
    protected $fillable = [
        'game_id',
		'team_id',
		'player_id',
		'created_at'
    ];

    public function game()
    {
        return $this->belongsTo('App\Game');
    };

    public function player()
    {
        return $this->belongsTo('App\Player');
    };

    public function team()
    {
        return $this->belongsTo('App\Team');
    };
}
