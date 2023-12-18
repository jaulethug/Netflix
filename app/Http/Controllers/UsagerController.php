<?php

namespace App\Http\Controllers;

use App\Models\User; // Modifiez par le modèle approprié si nécessaire
use Illuminate\Http\Request;

class UsagerController extends Controller
{
    public function index()
    {
        $usagers = User::all();
        return view('usagers.index', compact('usagers'));
    }

    public function create()
    {
        return view('usagers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('usagers.index')
                         ->with('success', 'Usager créé avec succès.');
    }

    public function show(User $usager)
    {
        return view('usagers.show', compact('usager'));
    }

    public function edit(User $usager)
    {
        return view('usagers.edit', compact('usager'));
    }

    public function update(Request $request, User $usager)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$usager->id,
        ]);

        $usager->update($request->all());

        return redirect()->route('usagers.index')
                         ->with('success', 'Usager mis à jour avec succès.');
    }

    public function destroy(User $usager)
    {
        $usager->delete();

        return redirect()->route('usagers.index')
                         ->with('success', 'Usager supprimé avec succès.');
    }
}

