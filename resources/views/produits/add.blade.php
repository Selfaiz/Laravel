@extends('layouts.master')
@section('content')
<div class="container">

  <section class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Add Product</h3>
    </div>
    <div class="panel-body">
      <form method="POST" action="{{Route(" produits.store")}}" class="form-horizontal">
        @csrf
        <div class="form-group">
          <div class="col-sm-9">
            <label for="name" class="col-sm-3 control-label my-2">Visible</label>
            <label class="radio-inline">
              <input type="radio" name="Visibility" value="active"> Active
            </label>
            <label class="radio-inline ms-3">
              <input type="radio" name="Visibility" value="disable"> Disabled
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="marque" class="col-sm-3 control-label my-2">Marque</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="marque" id="name" placeholder="Saisir la Marque">
          </div>
        </div>
        <div class="form-group">
          <label for="prix" class="col-sm-3 control-label my-2">Prix</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" name="prix" id="name" placeholder="Saisir le Prix ">
          </div>
        </div>
        <div class="form-group">
          <label for="modele" class="col-sm-3 control-label my-2">Modele</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="modele" id="name" placeholder="Saisir le Modele ">
          </div>
        </div>
        <div class="form-group">
          <label for="description" class="col-sm-3 control-label my-2 ">Description</label>
          <div class="col-sm-9">
            <textarea name="description" class="form-control" placeholder="Saisir la description "></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="categorie" class="col-sm-3 control-label my-2">Categorie</label>
          <div class="col-sm-9">
            <input type="text" class="form-control " name="categorie" placeholder="Saisir la categorie">
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label my-2">Image De Produit</label>
          <div class="col-sm-3">
            <input type="file" class="my-2" name="img">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-9 text-center">
            <button type="submit" class="btn btn-primary ">Add</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>
@endsection