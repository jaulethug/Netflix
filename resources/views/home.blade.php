{{-- resources/views/home.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de Bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté(e) !

                    @if(auth()->user()->hasRole('admin'))
                        <div>
                            <p>Ceci est un contenu spécifique pour les administrateurs.</p>
                            <!-- Ajoutez ici d'autres éléments pour les administrateurs -->
                        </div>
                    @endif

                    @if(auth()->user()->hasRole('user'))
                        <div>
                            <p>Ceci est un contenu spécifique pour les utilisateurs standards.</p>
                            <!-- Ajoutez ici d'autres éléments pour les utilisateurs standards -->
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
