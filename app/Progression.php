<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progression extends Model
{
  //on crée les champs qui seront dans la table Student
  protected $fillable = ['formation', 'section', 'session', 'user_id', 'statut'];

  //Relation one-to-many : ici, une progression concerne un seul étudiant

  public function student()
  {
      return $this->belongsTo('App\User');
  }
}
