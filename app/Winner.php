<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;
use App\Team;

class Winner extends Model
{
    protected $fillable = [
        'game_id',
		'team_id',
		'tie'
    ];

    public function game()
    {
        return $this->belongsTo('App\Game');
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
