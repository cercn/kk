@extends('admin.template')

@section('title', 'Vehicules')
@section('subtitle' , 'Nouveau-vehicule')
@section('content')
<div class="row">

    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Ajouter un nouveau vehicule </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('vehicules.index')}}" class="btn btn-sm btn-dark">Tous les vehicules</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('vehicules.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h6 class="heading-small text-warning mb-4">informations sur la voiture</h6>
                    <div class="pl-lg-4">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Modèle du véhicule</label>
                                    <input type="text"  name="modele" id="modele" class="form-control" placeholder="Camry 1587">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="marque">Marque de la voiture</label>
                        
                                    <select name="marque" id="marque" class="form-control">
                                        <option value="chevrolet">Chevrolet</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="ford">Ford</option>
                                        <option value="audi">Audi</option>
                                        <option value="autres">Autres</option>
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="carburant">Type de carburant</label>
                                    <select name="carburant" class="form-control" id="carburant">
                                        <option value="diesel">diesel</option>
                                        <option value="essence">Essence</option>
                                    </select>
                                   
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="categorie">Categorie du vehicule</label>
                                    <select name="categorie" id="" class="form-control">
                                    @foreach($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                    @endforeach

                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="image">Ajouter une image du vehicule</label>
                                    <input type="file" name="image" id="image" class="form-control">    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="description">Description du véhicule</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Tapez votre texte ici"></textarea>
                                    
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
                                    <input type="number"  name="prix" id="prix" class="form-control" placeholder="15000">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="quantite">Nombre de vehicule disponible pour location</label>
                                    <input type="number"  name="quantite" id="quantite" class="form-control" placeholder="10">
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