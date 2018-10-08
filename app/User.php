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
        return $this->type === self::ADMIN_TYPE;
    }

    public function isTeacher()    {
        return $this->type === self::TEACHER_TYPE;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nom', 'prenoms', 'photo', 'user_id', 'max_students'
    ];

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

    public function progressions()
    {
        return $this->hasMany('App\Progression');
    }

    public function formations()
    {
        return $this->belongsToMany('App\Formation');
    }

    public function etatprojets()
    {
        return $this->hasMany('App\Etatprojet');
    }

    public function routeNotificationForSlack()

   {

       Return 'https://hooks.slack.com/services/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';

   }
}
