<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
  //on crée les champs qui seront dans la table classroom
  protected $fillable = ['date', 'etudiant', 'formateur', 'user_id', 'commentaire'];

  //Relation one-to-many : ici, une classe a un seul teacher

  public function teacher()
  {
      return $this->belongsTo('App\Teacher');
  }
}
