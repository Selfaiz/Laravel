@extends('layouts.master')
@section('title','Accueil')
@section('content')
    <div class="text-center py-5">
        <h1>Gestion Produits</h1>
        <p class="w-50 m-auto">Lorem ipsum d
            lor sit amet consectetur adipisicing elit. Dolores suscipit, excepturi praesentium ratione, dignissimos id fugit nisi consequatur fuga quidem deserunt delectus enim doloribus voluptatem aspernatur repellat, quo vel qui.</p>
        <a class="btn btn-outline-secondary my-3" href="{{Route('produits.index')}}">Get Started</a>
    </div>
@endsection