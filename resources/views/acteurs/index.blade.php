{{-- Vue pour lister les acteurs --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Acteurs</h1>
    <a href="{{ route('acteurs.create') }}">Ajouter un Nouvel Acteur</a>
    <ul>
        @foreach ($acteurs as $acteur)
            <li>
                {{ $acteur->nom }}
                <a href="{{ route('acteurs.show', $acteur->id) }}">Voir</a>
                <a href="{{ route('acteurs.edit', $acteur->id) }}">Modifier</a>
                <form action="{{ route('acteurs.destroy', $acteur->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
