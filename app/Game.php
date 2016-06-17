<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Comment;
use App\Goal;
use App\Winner;
use App\Team

class Game extends Model
{
    protected $fillable = [
        'name',
        'begin_first_time',
		'end_first_time',
		'begin_second_time',
		'end_second_time',
		'extension',
		'penalty',
		'date',
		'hour'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    };

    public function goals()
    {
        return $this->hasMany('App\Goal');
    };

    public function winner()
    {
        return $this->hasOne('App\Winner');
    };

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'games_teams', 'game_id', 'team_id');
    }
}
