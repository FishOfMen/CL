<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
  protected $table = "seasons";

  public $timestamps = true;

  protected $fillable = [
      'name', 'start_date', 'end_date'
  ];

    public function game(){
        return $this->hasMany('App\Game');
    }

    public function league(){
        return $this->belongsToMany('App\League');
    }

}
