<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $fillable = ['title', 'description', 'link', 'image', 'audience'];
}
