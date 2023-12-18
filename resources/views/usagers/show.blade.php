{{-- Vue pour afficher les détails d'un usager --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'Usager</h1>
    <div>
        <strong>Nom:</strong> {{ $usager->name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $usager->email }}
    </div>
    {{-- Ajoutez plus de champs si nécessaire --}}
</div>
@endsection
