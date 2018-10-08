<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
  protected $fillable = ['nom', 'categorie_id', 'description'];

  //relation many to many: ici une formation peut avoir plusieurs etudiants
  //et plusieurs projets et vice-versa

  public function users()
  {
      return $this->belongsToMany('App\User');
  }

  public function projets()
  {
      return $this->belongsToMany('App\Projet');
  }
}
