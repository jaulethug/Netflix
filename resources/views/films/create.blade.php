@extends('layouts.app')
@section('title', 'ajout de film')
@section('contenu')
<h1>formulaire creation film</h1>
<form method="POST" action="">
<label for="titre">Titre du film</label><br>
<input type="text" name="titre"><br>
<label for="">Resume du film</label><br>
<input type="text" name="resume"><br>
<label for="image">Image du film</label><br>
<input type="text" name="pochette"><br>
<label for="duree">Duree du film</label><br>
<input type="text" name="duree"><br>
<label for="annee">Annee de creation du film</label><br>
<input type="text" name="annee"><br>
<label for="rating">Note du film</label><br>
<input type="text" name="rating"><br>
<label for="lien">Bande annonce du film</label><br>
<input type="text" name="lien"><br>
<button type="submit">termine</button>
</form>
@endsection