<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = [
        'game_id',
		'team_id',
		'player_id',
		'created_at'
    ];
}
