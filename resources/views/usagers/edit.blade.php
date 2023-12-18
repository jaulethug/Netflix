{{-- Vue pour modifier un usager existant --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'Usager</h1>
    <form method="POST" action="{{ route('usagers.update', $usager->id) }}">
        @csrf
        @method('PUT')

        {{-- Champ pour le nom --}}
        <div>
            <label for="name">Nom:</label>
            <input type="text" name="name" value="{{ $usager->name }}" required>
        </div>

        {{-- Champ pour l'email --}}
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $usager->email }}" required>
        </div>

        {{-- Bouton de soumission --}}
        <button type="submit">Modifier</button>
    </form>
</div>
@endsection
