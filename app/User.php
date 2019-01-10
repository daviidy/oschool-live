<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const TEACHER_TYPE = 'teacher';
    const DEFAULT_TYPE = 'default';

    public function isAdmin()    {
        return $this->type3 === self::ADMIN_TYPE;
    }

    public function isTeacher()    {
        return $this->type2 === self::TEACHER_TYPE;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nom', 'prenoms', 'photo', 'user_id', 'max_students', 'fin_abonnement', 'statut'
    ];

    protected $dates = ['fin_abonnement'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function students()
    {
        return $this->hasMany('App\User');
    }

    public function teacher()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function sessions()
    {
        return $this->hasMany('App\Classroom');
    }

    public function etatprogressions()
    {
        return $this->hasMany('App\Etatprogression');
    }

    public function formations()
    {
        return $this->belongsToMany('App\Formation');
    }

    public function etatprojets()
    {
        return $this->hasMany('App\Etatprojet');
    }

    public function achats()
    {
        return $this->hasMany('App\Achat');
    }

    public function routeNotificationForSlack()

   {

       Return 'https://hooks.slack.com/services/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';

   }


   //fonction pour savoir si un user a déjà envoyé des livrables
   //concernant un projet donné
   public function worked($projetId)
  {
      return $this->etatprojets()->where('projet_id', $projetId)->count() > 0;
  }


  //fonction pour savoir si un user a déjà envoyé validé une progression donnée
  public function validated($progressionId)
 {
     return $this->etatprogressions()->where('progression_id', $progressionId)->count() > 0;
 }


 //fonction pour savoir si un user est inscrit à une formation
 public function subscribed($formationId)
{
    return $this->formations()->where('id', $formationId)->count() > 0;
}




}
