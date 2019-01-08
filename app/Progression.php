<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progression extends Model
{
  protected $fillable = ['formation', 'titre', 'formation_id', 'lien'];

  //Relation one-to-many : ici, une progression concerne un seul étudiant

  public function student()
  {
      return $this->belongsTo('App\Formation');
  }

  //une progression a plusieurs etats pour un étudiant donné

  public function etatprogressions()
  {
      return $this->hasMany('App\Etatprogression');
  }
}
