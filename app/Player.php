<?php

namespace App;
use App\Goal;
use App\Person;
use App\Team;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'person_id',
        'team_id'
    ];

    public function goals()
    {
        return $this->hasMany('App\Goal');
    };

    public function person()
    {
        return $this->belongsTo('App\Person');
    };

    public function team()
    {
        return $this->belongsTo('App\Team');
    };
}
