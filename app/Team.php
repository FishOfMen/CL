<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function teamcomposition()
    { 
        return $this->hasOne('teamcomposition');
    }
    public function user()
    { 
        return $this->hasOne('user');
    }
    public function teamhockeystat()
    {
        return $this->hasOne('teamhockeystat');
    }
    public function games()
    {  
        return $this->hasMany('games');
    }
    public function league()
    {
        return $this->hasMany('league');
    }
}
