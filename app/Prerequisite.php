<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prerequisite extends Model
{
    protected $fillable = ['description', 'type', 'link'];

    //Relation many-to-many : one prerequisite can belong to many courses

    public function formations()
    {
        return $this->belongsToMany('App\Formation');
    }
}
