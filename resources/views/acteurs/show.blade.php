{{-- Vue pour afficher les détails d'un acteur --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $acteur->nom }}</h1>
    {{-- Affichez ici d'autres détails de l'acteur --}}
</div>
@endsection
