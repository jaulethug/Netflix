{{-- Vue pour modifier un film et gérer ses acteurs --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier le Film: {{ $film->titre }}</h1>
    
    {{-- Formulaire de modification du film --}}
    {{-- ... --}}

    {{-- Formulaire pour ajouter un acteur au film --}}
    <form method="POST" action="{{ route('films.addActor', $film->id) }}">
        @csrf
        <select name="acteur_id">
            @foreach ($allActeurs as $acteur)
                <option value="{{ $acteur->id }}">{{ $acteur->nom }}</option>
            @endforeach
        </select>
        <button type="submit">Ajouter l'Acteur</button>
    </form>

    {{-- Liste des acteurs liés au film --}}
    @foreach ($film->acteurs as $acteur)
        <div>
            {{ $acteur->nom }}
            <form method="POST" action="{{ route('films.removeActor', [$film->id, $acteur->id]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Retirer cet Acteur</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
