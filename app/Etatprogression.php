<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etatprogression extends Model
{
  protected $fillable = ['progression_id', 'statut', 'user_id'];

  //Relation one-to-many : ici, une progression concerne un seul étudiant

  public function student()
  {
      return $this->belongsTo('App\User');
  }
}
