<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  //on crée les champs qui seront dans la table Teacher
  protected $fillable = ['nom', 'prenoms', 'email', 'photo'];

  //Relation one-to-many : ici, un teacher a plusieurs sessions ou classes
  public function sessions()
  {
      return $this->hasMany('App\Classroom');
  }

  //Relation one-to-many : ici, un teacher a plusieurs students

  public function teacher()
  {
      return $this->hasMany('App\Student');
  }
}
