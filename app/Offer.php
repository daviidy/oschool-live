<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['name', 'amount'];

    public function characteristics()
    {
      return $this->belongsToMany('App\Characteristic');
    }

    public function formations()
    {
        return $this->belongsToMany('App\Formation');
    }
}
