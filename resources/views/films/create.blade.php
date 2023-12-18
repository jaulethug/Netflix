{{-- Vue pour créer un nouveau film --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Nouveau Film</h1>
    <form method="POST" action="{{ route('films.store') }}">
        @csrf
        <label for="titre">Titre:</label>
        <input type="text" name="titre" required>

        <label for="description">Description:</label>
        <textarea name="description"></textarea>

        {{-- Ajoutez ici d'autres champs nécessaires --}}

        <button type="submit">Ajouter</button>
    </form>
</div>
@endsection
