<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function sport(){
        return $this->hasOne('sport');
    }
         
    public function user(){
        return $this->hasOne('user');
    }
        
    public function team(){
        return $this->hasMany('team');
    }    
}

