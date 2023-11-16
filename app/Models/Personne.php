<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = ['nom', 'date_de_naissance', 'lieu_de_naissance', 'photo', 'id_realisateur', 'id_producteur'];

    public function realisateur()
    {
        return $this->belongsTo(Personne::class, 'id_realisateur');
    }

    public function producteur()
    {
        return $this->belongsTo(Personne::class, 'id_producteur');
    }
}

