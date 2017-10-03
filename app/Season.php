<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function game(){
        return $this->hasMany('game');
    }
        
    public function league(){
        return $this->hasOne('league');
    }
        
}
