<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ActeurFilmTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('acteur_film')->insert([
            [
                'acteur_id' => 1,
                'film_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'acteur_id' => 2,
                'film_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}

