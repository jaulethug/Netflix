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
            ]);
            
    }
}
