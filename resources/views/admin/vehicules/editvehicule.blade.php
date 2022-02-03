@extends('admin.template')

@section('title', 'Vehicules')
@section('subtitle' , 'Modifier vehicule')
@section('content')
<div class="row">

    <div class="col ">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Modifier les informations d'un vehicule</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('vehicules.index')}}" class="btn btn-sm btn-dark">Tous les vehicules</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('vehicules.update',['vehicule'=>$car->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h6 class="heading-small text-warning mb-4">informations sur la voiture</h6>
                    <div class="pl-lg-4">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Modèle du véhicule</label>
                                    <input type="text"  name="modele" id="modele" class="form-control" value="{{ $car->modele }}">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="marque">Marque de la voiture</label>
                        
                                    <select name="marque" id="marque" class="form-control">
                                        <option value="wolswagen" {{ $car->marque=="chevrolet" ? 'selected' : ''}}>Chevrolet</option>
                                        <option value="toyota" {{ $car->marque=="toyota" ? 'selected' : ''}}>Toyota</option>
                                        <option value="mercedes"  {{ $car->marque=="mercedes" ? 'selected' : ''}}>Mercedes</option>
                                        <option value="ford" {{ $car->marque=="ford" ? 'selected' : ''}}>Ford</option>
                                        <option value="audi" {{ $car->marque=="audi" ? 'selected' : ''}}>Audi</option>
                                        <option value="autres" {{ $car->marque=="autres" ? 'selected' : ''}}>Autres</option>
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="carburant">Type de carburant</label>
                                    <select name="carburant" class="form-control" id="carburant">
                                        <option value="diesel" {{ $car->carburant="diesel" ? 'selected' : ''}}>diesel</option>
                                        <option value="essence" {{ $car->essence=="essence" ? 'selected' : ''}}>Essence</option>
                                    </select>
                                   
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="categorie">Categorie du vehicule</label>
                                    <select name="categorie" id="" class="form-control">
                                    @foreach($categories as $categorie)
                                    <option value="{{ $categorie->id }}" {{ $categorie->id == $car->id ? 'slected' : ''}}>{{ $categorie->libelle }}</option>
                                        
                                      
                                    @endforeach

                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="image">Ajouter une image du vehicule</label>
                                    <input type="file" name="image" id="image" class="form-control" >    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="image">Ancienne image du vehicule</label>
                                    <img src="{{ $car->image }}" alt="" class="img-fluid">   
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="description">Description du véhicule</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Tapez votre texte ici">{{ $car->description }}</textarea>
                                    
                                </div>
                            </div>
                        </div>


                        
                    </div>
                    <hr class="my-4" />
                    <!-- Données specifiques-->
                    <h6 class="heading-small text-warning mb-4">Donnees specifiques à la voiture</h6>
                    <div class="pl-lg-4">

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="prix">Prix de location par jour</label>
                                    <input type="number"  name="prix" id="prix" class="form-control" value="{{ $car->prix }}"">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="quantite">Nombre de vehicule disponible pour location</label>
                                    <input type="number"  name="quantite" id="quantite" class="form-control" value="{{ $car->quantite }}">
                                </div>
                            </div>

                        </div>

                       

                    </div>

                    <div class="container d-flex justify-content-center">
                        <button type="reset" class="btn btn-danger">Annuler</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection