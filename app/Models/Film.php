<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['titre', 'resume', 'pochette', 'duree', 'annee', 'rating', 'lien'];
}

