<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use Illuminate\Http\Request;

class ActeurController extends Controller
{
    public function index()
    {
        $acteurs = Acteur::all();
        return view('acteurs.index', compact('acteurs'));
    }

    public function create()
    {
        return view('acteurs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
        ]);

        Acteur::create($validatedData);

        return redirect()->route('acteurs.index')
                         ->with('success', 'Acteur ajouté avec succès.');
    }

    public function show(Acteur $acteur)
    {
        return view('acteurs.show', compact('acteur'));
    }

    public function edit(Acteur $acteur)
    {
        return view('acteurs.edit', compact('acteur'));
    }

    public function update(Request $request, Acteur $acteur)
    {
        $validatedData = $request->validate([
            
        ]);

        $acteur->update($validatedData);

        return redirect()->route('acteurs.index')
                         ->with('success', 'Acteur mis à jour avec succès.');
    }

    public function destroy(Acteur $acteur)
    {
        $acteur->delete();

        return redirect()->route('acteurs.index')
                         ->with('success', 'Acteur supprimé avec succès.');
    }
}
