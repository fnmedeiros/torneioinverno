<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;

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
}
