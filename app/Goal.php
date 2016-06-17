<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;

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
    }
}
