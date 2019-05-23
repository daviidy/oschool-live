<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guideprojet extends Model
{
  protected $fillable = ['title', 'link', 'type', 'projet_id'];

  public function projet()
  {
      return $this->belongsTo('App\Projet');
  }

}
