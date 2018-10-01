<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
  protected $fillable = ['nom', 'categorie_id', 'description'];

  public function users()
  {
      return $this->belongsToMany('App\User');
  }
}
