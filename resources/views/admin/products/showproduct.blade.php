@extends('admin.template')
@section('title', 'Produits')
@section('subtitle' , 'Details du produit')
@section('content')

<div class="col">
    <div class="card">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Details sur le produit : <strong class="text-danger font-weight-bold">{{ $product->nom }}</strong></h3>
            </div>
            <div class="col-4 text-right">
                <a href="{{ route('products.index')}}" class="btn btn-sm btn-dark">Tous les produits</a>
            </div>
        </div>
      
      </div>
      <div class="card-body">
        <div class="row">
        <div class="col-6">
            <span class="badge badge-c-success badge-custom border-0">{{ $product->link3D ? ' 3D' : 'Image' }}</span>
              <img src="{{ $product->image}}" alt="{{ $product->modele }}" class="img-fluid">
        </div>

          <div class="col-6 text-dark">
            
              <h3>Categorie du produit :
              <span class="badge bg-danger text-white">@foreach ($categories as $categorie)  @if($categorie->id==$product->categorie_id)  {{ $categorie->libelle }} @endif  @endforeach</span>  </h3>
            

              <p class="font-weight-bold">Nom du produit : <span class="text-warning"> {{ $product->nom }} </span> </p>

              <p class="font-weight-bold">Marque du produit :  {{ $product->marque }}</p>

              <h4> Prix du produit :</h4>

              <button class="btn btn-lg btn-success">{{ $product->prix }} FCFA</button>

              <h3 class="font-weight-bold mt-3 text-warning">Description du produit:</h3>

              <div class="x-text-fs2">{{ $product->description }}</div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection