<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Comment;
use App\Person;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    };

    public function person()
    {
        return $this->belongsTo('App\Person');
    };
}
