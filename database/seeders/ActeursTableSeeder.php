<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ActeursTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('acteurs')->insert([
            [
                'nom' => 'John Doe',
                'date_de_naissance' => Carbon::create('1980', '01', '01'),
                'nationalite' => 'Américaine',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nom' => 'Jane Doe',
                'date_de_naissance' => Carbon::create('1985', '07', '15'),
                'nationalite' => 'Canadienne',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
