<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supportformation extends Model
{
  //on crée les champs qui seront dans la table Supportformation
  protected $fillable = ['lien', 'formation_id', 'titre'];

  //Relation one-to-many : ici, une progression concerne un seul étudiant

  public function formation()
  {
      return $this->belongsTo('App\Formation');
  }
}
