<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hockeystat extends Model
{
    public function user(){
        return $this->hasOne('user');
    }
        
}
