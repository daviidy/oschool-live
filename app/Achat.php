<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    protected $fillable = ['email', 'nom', 'prenoms', 'tel', 'user_id', 'montant', 'formation', 'date', 'promo', 'trans_id', 'signature', 'statut', 'achat_id'];

    public function student()
    {
        return $this->belongsTo('App\User');
    }
}
