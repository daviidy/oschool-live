<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    protected $fillable = ['email', 'nom', 'prenoms', 'tel'];
}
