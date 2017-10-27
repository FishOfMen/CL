<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamcomposition extends Model
{
  protected $table = "teamcompositions";

  public $timestamps = true;

  protected $fillable = [
      
  ];

    public function user(){
        return $this->belongsToMany('App\User');
    }

    public function team(){
        return $this->belongsTo('App\Team');
    }

}
