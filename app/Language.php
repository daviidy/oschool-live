<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name'];

    //Relation many-to-many : one language can belong to many courses

    public function formations()
    {
        return $this->belongsToMany('App\Formation');
    }
}
