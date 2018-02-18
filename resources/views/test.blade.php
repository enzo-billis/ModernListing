@extends('layouts.app')
@section('title', $title)




@section('content')
<h1>{{$title}}</h1>

@forelse($produits as $produit)
    <li>{{$produit->nom}} x {{$produit->quantite}} --- <form method="post" action="/delete"><input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="hidden" name="id" value="{{ $produit->id }}"><button type="submit" class="btn btn-primary"> Supprimer</button></form></li>
@empty
    <p>La liste est vide</p>
@endforelse

@endsection




@section('form')
    <form method="post" action="/">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="nom">Produit à ajouter</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Exemple : Nutella">

        </div>
        <div class="form-group">
            <label for="number">Quantité</label>
            <input type="number" class="form-control" name="number" id="number" placeholder="Exemple : 1">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection