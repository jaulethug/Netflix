<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
            'id' => 1,
            'titre' => 'titanic',
            'resume'=> 'bateau qui coule',
            'pochette' => 'image du film',
            'duree' =>  "123 minutes",
            "annee" => 1995,
            'rating' => 4,
            'lien' => 'lien du video'
            ],
             [
                'id' => 2,
                'titre' => 'batman',
                'resume'=> ' le hero batman',
                'pochette' => 'image du film2',
                'duree' =>  "12334 minutes",
                "annee" => 2001,
                'rating' => 3,
                'lien' => 'lien du video2'
            ],
            [
                'id' => 3,
                'titre' => 'iron man',
                'resume'=> ' le hero iron man',
                'pochette' => 'image du film3',
                'duree' =>  "2554 minutes",
                "annee" => 2002,
                'rating' => 4,
                'lien' => 'lien du video3'
            ],
            [
                'id' => 4,
                'titre' => 'john wick',
                'resume'=> 'john wick tue tout le monde',
                'pochette' => 'image du film4',
                'duree' =>  "210 minutes",
                "annee" => 2004,
                'rating' => 5,
                'lien' => 'lien du video4'
            ],
            [
                'id' => 5,
                'titre' => 'john wick 2',
                'resume'=> 'john wick tue tout le monde encore',
                'pochette' => 'image du film5',
                'duree' =>  "231 minutes",
                "annee" => 2005,
                'rating' => 3,
                'lien' => 'lien du video5'
            ],
            [
                'id' => 6,
                'titre' => 'john wick 3',
                'resume'=> 'john wick tue tout le monde encore encore',
                'pochette' => 'image du film6',
                'duree' =>  "120 minutes",
                "annee" => 2005,
                'rating' => 5,
                'lien' => 'lien du video6'
            ],
            [
                'id' => 7,
                'titre' => 'pirates des caraibes',
                'resume'=> 'jack sparrow le pirate',
                'pochette' => 'image du film5',
                'duree' =>  "210 minutes",
                "annee" => 2004,
                'rating' => 5,
                'lien' => 'lien du video7'
            ],
            [
                'id' => 8,
                'titre' => 'shrek',
                'resume'=> 'shrek logre fait du grabuge',
                'pochette' => 'image du film8',
                'duree' =>  "200 minutes",
                "annee" => 2004,
                'rating' => 5,
                'lien' => 'lien du video8'
            ],
            [
                'id' => 9,
                'titre' => 'shrek 2',
                'resume'=> 'le retour de shrek',
                'pochette' => 'image du film9',
                'duree' =>  "100 minutes",
                "annee" => 2008,
                'rating' => 5,
                'lien' => 'lien du video9'
            ],
            [
                'id' => 10,
                'titre' => 'shrek 3',
                'resume'=> 'les aventures de shrek',
                'pochette' => 'image du film10',
                'duree' =>  "190 minutes",
                "annee" => 2004,
                'rating' => 5,
                'lien' => 'lien du video10'
            ],
            ]);
            
    }
}
