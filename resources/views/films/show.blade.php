{{-- Vue pour afficher les détails d'un film --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $film->titre }}</h1>
    <p>{{ $film->description }}</p>
    {{-- Affichez ici d'autres détails du film --}}
</div>
@endsection
