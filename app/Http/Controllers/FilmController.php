<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Acteur;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
        ]);

        Film::create($validatedData);

        return redirect()->route('films.index')
                         ->with('success', 'Film ajouté avec succès.');
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    public function update(Request $request, Film $film)
    {
        $validatedData = $request->validate([
            
        ]);

        $film->update($validatedData);

        return redirect()->route('films.index')
                         ->with('success', 'Film mis à jour avec succès.');
    }

    public function destroy(Film $film)
    {
        $film->delete();

        return redirect()->route('films.index')
                         ->with('success', 'Film supprimé avec succès.');
    }

    public function addActor(Request $request, Film $film)
    {
        $film->acteurs()->attach($request->acteur_id);
        return back()->with('success', 'Acteur ajouté au film.');
    }

    public function removeActor(Film $film, Acteur $acteur)
    {
        $film->acteurs()->detach($acteur->id);
        return back()->with('success', 'Acteur retiré du film.');
    }
}

