<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hockeystat extends Model
{
  protected $table = "hockeystats";

  public $timestamps = true;

  protected $fillable = [
      'goals', 'assists', 'penalties', 'shutouts'
  ];

    public function user(){
        return $this->belongsTo('App\User');
    }

}
