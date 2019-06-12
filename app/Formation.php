<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
  protected $fillable = ['nom',
                         'category_id',
                         'description',
                         'state',
                         'duration',
                         'slug',
                         'description_longue',
                         'accroche',
                         'start_date',
                         'video',
                         'type',
                         'program',
                         'teacher'
                       ];

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

  public function offers()
  {
      return $this->belongsToMany('App\Offer');
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

  public function category()
  {
      return $this->belongsTo('App\Category');
  }

  public function ownOffer($offerId)
 {
     return $this->offers()->where('offer_id', $offerId)->count() > 0;
 }

 public function ownPrerequisite($prerequisiteId)
{
    return $this->prerequisites()->where('prerequisite_id', $prerequisiteId)->count() > 0;
}

public function ownLanguage($languageId)
{
   return $this->languages()->where('language_id', $languageId)->count() > 0;
}

public function ownPartner($partnerId)
{
   return $this->partners()->where('partner_id', $partnerId)->count() > 0;
}

}
