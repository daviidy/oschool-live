<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['nom'];

    public function formations()
    {
        return $this->hasMany('App\Formation');
    }
}
