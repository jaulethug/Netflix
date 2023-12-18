<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['titre', 'resume', 'pochette', 'duree', 'annee', 'rating', 'lien'];

    public function acteurs()
    {
        return $this->belongsToMany(Acteur::class, 'acteur_film');
    }

    
}
