<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorycharac extends Model
{
  protected $fillable = ['name',];

  public function characteristics()
  {
    return $this->hasMany('App\Characteristic');
  }
}
