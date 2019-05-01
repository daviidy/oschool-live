<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
  protected $fillable = ['nom', 'categorie_id', 'description', 'state', 'duration'];

  //relation many to many: ici une formation peut avoir plusieurs etudiants
  //et plusieurs projets et vice-versa

  public function users()
  {
      return $this->belongsToMany('App\User');
  }

  //a course can have many projects and vice versa
  public function projets()
  {
      return $this->belongsToMany('App\Projet');
  }

  //a course can have many languages and vice versa
  public function languages()
  {
      return $this->belongsToMany('App\Language');
  }

  //a course can have many prerequisites and vice versa
  public function prerequisites()
  {
      return $this->belongsToMany('App\Prerequisite');
  }

  //a course can have many partners and vice versa
  public function partners()
  {
      return $this->belongsToMany('App\Partner');
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
