{{-- Vue pour créer un nouvel acteur --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Nouvel Acteur</h1>
    <form method="POST" action="{{ route('acteurs.store') }}">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required>

        {{-- Ajoutez ici d'autres champs nécessaires --}}

        <button type="submit">Ajouter</button>
    </form>
</div>
@endsection
