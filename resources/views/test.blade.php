@extends('layouts.app')
@section('title', $title)


@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1></h1>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{asset("/img/logopng.png")}}">
                <h1>{{$title}}</h1><p>
            </div>
            <div class="col-md-3">
                <h1></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th class="text-center">Produit</th>
                    <th class="text-center">Quantité</th>
                    <th class="text-center">Supprimer</th>
                </tr>
            </thead>
            <tbody>
            @forelse($produits as $produit)

                    <tr>
                        <th class="text-center">{{$produit->nom}}</th>
                        <th class="text-center">{{$produit->quantite}}</th>
                        <th class="text-center"><form method="post" action="/delete"><input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="hidden" name="id" value="{{ $produit->id }}"><button type="submit" class="btn btn-primary"><img src="{{ asset('img/glyphicons-17-bin.png') }}"></button></form></th>
                    </tr>

                
            @empty
                <div class="alert alert-success "><strong>Enfin !</strong> La liste de course est vide.</div>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection




@section('form')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <form method="post" action="/">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nom">Produit à ajouter</label>
                        <input type="text" class="form-control text-center" name="nom" id="nom" placeholder="Exemple : Nutella">

                    </div>
                    <div class="form-group">
                        <label for="number">Quantité</label>
                        <input type="number" class="form-control text-center" name="number" id="number" placeholder="Exemple : 1">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection