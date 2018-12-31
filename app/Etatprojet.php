<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etatprojet extends Model
{
  //on crée les champs qui seront dans la table Etatprojet
  protected $fillable = ['livrables', 'commentaire', 'statut', 'user_id', 'projet', 'projet_id'];

  //Relation one-to-many : ici, un etat projet appartient a un seul etudiant

  public function student()
  {
      return $this->belongsTo('App\User');
  }

  public function projet()
  {
      return $this->belongsTo('App\Projet');
  }
}
