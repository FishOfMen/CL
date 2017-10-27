<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
  protected $table = "sports";

  public $timestamps = true;

  protected $fillable = [
      'name'
  ];

    public function league(){
        return $this->hasMany('App\League', 'sport_id');
    }

}
