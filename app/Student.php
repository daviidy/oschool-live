<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //on crée les champs qui seront dans la table Student
    protected $fillable = ['nom', 'prenoms', 'email', 'teacher_id', 'jour', 'photo'];

    //Relation one-to-many : ici, un étudiant a plusieurs progressions
    public function progressions()
    {
        return $this->hasMany('App\Progression');
    }

    //Relation one-to-many : ici, un étudiant a un seul teacher

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
}
