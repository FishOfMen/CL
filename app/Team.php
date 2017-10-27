<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $table = "teams";

  public $timestamps = true;

  protected $fillable = [
      'team_name'
  ];

    public function teamcomposition()
    {
        return $this->hasOne('App\Teamcomposition', 'team_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }
    public function teamhockeystat()
    {
        return $this->hasOne('App\Teamhockeystat', 'team_id');
    }
    public function gameAway()
    {
        return $this->hasMany('App\Game', 'away_team_id');
    }
    public function gameHome()
    {
        return $this->hasMany('App\Game', 'home_team_id');
    }
    public function gameWin()
    {
        return $this->hasMany('App\Game', 'winning_team_id');
    }
    public function league()
    {
        return $this->belongsTo('App\League', 'league_id');
    }
}
