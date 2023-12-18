<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Obtenir l'utilisateur actuellement connecté

        if ($user->hasRole('admin')) {
            // Logique spécifique à l'admin
        }

        // Logique générale
    }
}
