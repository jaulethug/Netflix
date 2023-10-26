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
            ]);
    }
}
