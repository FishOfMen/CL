<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
       'first_name', 'last_name', 'email', 'username', 'password', 'birthday', 'address', 'city', 'state', 'zip'
   ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = true;

    protected $table="users";

    public function teamcomposition(){
        return $this->hasMany('App\Teamcomposition', 'user_id');
    }

    public function hockeystat(){
        return $this->hasOne('App\Hockeystat', 'user_id');
    }

    public function team(){
        return $this->hasMany('App\Team', 'owner_id');
    }

    public function league(){
        return $this->hasMany('App\League', 'owner_id');
    }

}
