<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    protected $fillable = ['nom', 'date_de_naissance', 'nationalite'];

    public function films()
    {
        return $this->belongsToMany(Film::class, 'acteur_film');
    }
}
