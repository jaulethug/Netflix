{{-- Vue pour modifier un acteur existant --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'Acteur</h1>
    <form method="POST" action="{{ route('acteurs.update', $acteur->id) }}">
        @csrf
        @method('PUT')

        <label for="nom">Nom:</label>
        <input type="text" name="nom" value="{{ $acteur->nom }}" required>

        {{-- Ajoutez ici d'autres champs nécessaires --}}

        <button type="submit">Modifier</button>
    </form>
</div>
@endsection
