<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamcomposition extends Model
{
    public function user(){
        return $this->hasMany('user');
    }
        
    public function team(){
        return $this->hasMany('team');
    }
        
}
