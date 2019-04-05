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

  //une formation a plusieurs supports de ccours

  public function supportformations()
  {
      return $this->hasMany('App\Supportformation');
  }


  public function progressions()
  {
      return $this->hasMany('App\Progression');
  }

  public function categorie()
  {
      return $this->belongsTo('App\Categorie');
  }

}
