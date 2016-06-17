<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;
use App\User;

class Comment extends Model
{
    protected $fillable = [
        'game_id',
		'user_id',
		'comment',
		'created_at'
    ];

    public function game()
    {
        return $this->belongsTo('App\Game');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
