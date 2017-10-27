<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

  protected $table = "games";

  public $timestamps = true;

  protected $fillable = [
      'home_team_score', 'away_team_score', 'date'
  ];

    public function teamHome(){
        return $this->belongsTo('App\Team');
    }
    public function teamAway(){
        return $this->belongsTo('App\Team');
    }
    public function teamWin(){
        return $this->belongsTo('App\Team');
    }

    public function season(){
        return $this->belongsTo('App\Season');
    }
}
