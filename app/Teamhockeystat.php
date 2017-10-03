<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamhockeystat extends Model
{
    public function team(){
        return $this->hasOne('team');
    }
        
}
