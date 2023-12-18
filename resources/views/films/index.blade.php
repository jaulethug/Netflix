{{-- Vue pour lister les films --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Films</h1>
    <a href="{{ route('films.create') }}">Ajouter un Nouveau Film</a>
    <ul>
        @foreach ($films as $film)
            <li>
                {{ $film->titre }}
                <a href="{{ route('films.show', $film->id) }}">Voir</a>
                <a href="{{ route('films.edit', $film->id) }}">Modifier</a>
                <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
