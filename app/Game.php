<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
