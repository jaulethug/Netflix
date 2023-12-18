<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilmsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('films')->insert([
            [
                'titre' => 'Exemple de Film 1',
                'resume' => 'Ceci est un résumé du premier film.',
                'pochette' => 'lien_vers_pochette1.jpg',
                'duree' => 120,
                'annee' => 2021,
                'rating' => 4.5,
                'lien' => 'https://example.com/film1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'titre' => 'Exemple de Film 2',
                'resume' => 'Ceci est un résumé du deuxième film.',
                'pochette' => 'lien_vers_pochette2.jpg',
                'duree' => 95,
                'annee' => 2019,
                'rating' => 4.2,
                'lien' => 'https://example.com/film2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
