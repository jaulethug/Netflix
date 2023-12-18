{{-- Vue pour lister les usagers --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Usagers</h1>
    {{-- Boucle pour afficher les usagers --}}
    @foreach ($usagers as $usager)
        <p>{{ $usager->name }}</p>
        {{-- Ajoutez plus de détails ici --}}
    @endforeach
</div>
@endsection
