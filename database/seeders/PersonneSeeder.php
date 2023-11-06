<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personne')->insert([
            [
            'nom' => 'dicaprio',
            'datenaissance'=> '12 avril 1965',
            'liennaissance' => 'liennaissance',
            'photo' =>  "photo de la personne",
            'id_realisateur'=> 2,
            'id_producteur'=> 2
            ],
            [
            'nom' => 'bean',
            'datenaissance'=> '24 mai 1986',
            'liennaissance' => 'liennaissance2',
            'photo' =>  "photo de la personne2",
            'id_realisateur'=> 3,
            'id_producteur'=> 3
            ],
            [
                'nom' => 'keanu reeves',
                'datenaissance'=> '24 mai 1992',
                'liennaissance' => 'liennaissance3',
                'photo' =>  "photo de la personne3",
                'id_realisateur'=> 4,
                'id_producteur'=> 4
            ],
            [
                'nom' => 'mike myers',
                'datenaissance'=> '24 mai 2992',
                'liennaissance' => 'liennaissance4',
                'photo' =>  "photo de la personne4",
                'id_realisateur'=> 5,
                'id_producteur'=> 5
            ],
            [
                'nom' => 'leonardo di caprio',
                'datenaissance'=> '24 mai 1996',
                'liennaissance' => 'liennaissance6',
                'photo' =>  "photo de la personne6",
                'id_realisateur'=> 6,
                'id_producteur'=> 6
            ],
            [
                'nom' => 'johnny depp',
                'datenaissance'=> '24 mai 1983',
                'liennaissance' => 'liennaissance7',
                'photo' =>  "photo de la personne7",
                'id_realisateur'=> 7,
                'id_producteur'=> 7
            ],
            [
                'nom' => 'tom hanks',
                'datenaissance'=> '24 mai 1986',
                'liennaissance' => 'liennaissance8',
                'photo' =>  "photo de la personne8",
                'id_realisateur'=> 8,
                'id_producteur'=> 8
            ],
            [
                'nom' => 'ryan gosling',
                'datenaissance'=> '24 mai 1932',
                'liennaissance' => 'liennaissance9',
                'photo' =>  "photo de la personne9",
                'id_realisateur'=> 9,
                'id_producteur'=> 9
            ],
            [
                'nom' => 'Chris Hemsworth',
                'datenaissance'=> '24 mai 1952',
                'liennaissance' => 'liennaissance10',
                'photo' =>  "photo de la personne10",
                'id_realisateur'=> 10,
                'id_producteur'=> 10
            ],
            ]);
    }
}
