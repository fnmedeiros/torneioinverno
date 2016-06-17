<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $fillable = [
        'game_id',
		'team_id',
		'tie'
    ];
}
