<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
  //on crée les champs qui seront dans la table Projet
  protected $fillable = ['titre', 'enonce', 'image'];

  //Relation many-to-many : ici, une projet appartient à plusieurs formations

  public function formations()
  {
      return $this->belongsToMany('App\Formation');
  }

  public function etatprojets()
  {
      return $this->hasMany('App\Etatprojet');
  }

  //un projet peut concerner plusieurs progressions
  public function progressions()
  {
    return $this->belongsToMany('App\Progression');
  }

  //a projetct has one guide
  public function guideprojet()
  {
      return $this->hasOne('App\Guideprojet');
  }

  public function own($formationsId)
 {
     return $this->formations()->where('formation_id', $formationsId)->count() > 0;
 }

}
