@extends('layouts.master')
@section('content')
<form method="POST" action="{{Route("produits.store")}}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Marque</label>
        <input type="text" class="form-control" id="inputEmail4"  name='marque' placeholder="La Marque">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Prix</label>
        <input type="number" class="form-control" id="inputPassword4" name='prix' placeholder="Prix">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">modele</label>
      <input type="text" class="form-control" id="inputAddress" name='modele'  name='modele'placeholder="Modele">
    </div>
    <div class="form-group">
      <label for="inputAddress2">categorie</label>
      <input type="text" class="form-control" id="inputAddress2" name='categorie' placeholder="Categorie">
    </div>
    
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
@endsection