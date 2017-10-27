<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamhockeystat extends Model
{
  protected $table = "teamhockeystats";

  public $timestamps = true;

  protected $fillable = [
      'wins', 'losses', 'ties', 'goals_for', 'goals_against'
  ];

    public function team(){
        return $this->belongsTo(Team::class);
    }

}
