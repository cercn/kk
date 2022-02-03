@extends('admin.template')
@section('title', 'Vehicules')
@section('subtitle' , 'Details du vehicule')
@section('content')

<div class="col">
    <div class="card">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Details sur le vehicule : <strong class="text-danger font-weight-bold">{{ $car->modele }}</strong></h3>
            </div>
            <div class="col-4 text-right">
                <a href="{{ route('vehicules.index')}}" class="btn btn-sm btn-dark">Tous les vehicules</a>
            </div>
        </div>
      
      </div>
      <div class="card-body">
        <div class="row">
        <div class="col-6">
            <span class="badge badge-c-success badge-custom border-0">{{ $car->quantite }} vehicules</span>
              <img src="{{ $car->image}}" alt="{{ $car->modele }}" class="img-fluid">
        </div>

          <div class="col-6 text-dark">
            
              <h3>Categorie du vehicule :
              <span class="badge bg-danger text-white">@foreach ($categories as $categorie)  @if($categorie->id==$car->categorie_id)  {{ $categorie->libelle }} @endif  @endforeach</span>  </h3>
            

              <p class="font-weight-bold">Modele du vehicule : {{ $car->modele }}</p>

              <p class="font-weight-bold">Marque du vehicule : {{ $car->marque }}</p>

              <h4> Prix de location :</h4>

              <button class="btn btn-lg btn-success">{{ $car->prix }} FCFA / Jour</button>

              <h3 class="font-weight-bold mt-3 text-warning">Autres informations sur le vehicule</h3>

              <p class="font-weight-bold">Type de carburant : {{ $car->carburant }}</p>

              <p class="font-weight-bold">Description du vehicule : <br> {{ $car->description }}</p>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection