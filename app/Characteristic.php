<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
  protected $fillable = ['description', 'state', 'categorycharac_id'];

  public function offers()
  {
    return $this->belongsToMany('App\Offer');
  }

  public function categorycharac()
  {
    return $this->belongsTo('App\Categorycharac');
  }
}
