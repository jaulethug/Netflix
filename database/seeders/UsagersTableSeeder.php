<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsagersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('usagers')->insert([
            [
                'nom' => 'Utilisateur Exemple 1',
                'email' => 'user1@example.com',
                'password' => Hash::make('password1'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nom' => 'Utilisateur Exemple 2',
                'email' => 'user2@example.com',
                'password' => Hash::make('password2'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
