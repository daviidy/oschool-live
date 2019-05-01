<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name', 'image', 'link'];

    //Relation many-to-many : one partner can belong to many courses

    public function formations()
    {
        return $this->belongsToMany('App\Formation');
    }
}
