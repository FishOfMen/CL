<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function team(){
        return $this->hasMany('team');
    }     
        
    public function season(){
        return $this->hasOne('season');
    }   
}
