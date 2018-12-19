<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    protected $fillable = ['email', 'nom', 'prenoms', 'tel', 'user_id', 'montant', 'formation', 'date', 'promo'];

    public function student()
    {
        return $this->belongsTo('App\User');
    }
}
