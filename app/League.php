<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
  protected $table = "leagues";

  public $timestamps = true;

  protected $fillable = [
      'name'
  ];

    public function sport(){
        return $this->belongsTo('App\Sport');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function team(){
        return $this->hasMany('App\Team', 'league_id');
    }

    public function season(){
      return $this->hasMany('App\Season', 'league_id');
    }
}
