<?php

namespace App;

use App\Customers;
use Illuminate\Database\Eloquent\Model;
use App\Player;
use App\User;

class Person extends Model
{
    /**
     * The database table used by model.
     *
     * @var string
     */
    protected $table = 'person';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'age',
        'address',
        'photo',
        'phone',
        'phone_commercial',
        'mobile',
        'email',
        'notes',
        'person_type_id',
        'is_active',
        'cpf',
        'complement',
        'district',
        'zip_code',
        'city',
        'state',
        'rg',
        'marital_status'
    ];

    public function player()
    {
        return $this->hasOne('App\Player');
    };

    public function user()
    {
        return $this->hasOne('App\User');
    };
}
