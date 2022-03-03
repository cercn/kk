@extends('admin.template')
@include('admin.partials.summernote_css')
@section('title', 'Page')
@section('subtitle', 'Nouvelle-page')
@section('content')
    <div class="row">

        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Ajouter une nouvelle page </h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('faqs.index') }}" class="btn btn-sm btn-dark">Toutes les pages</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">


                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                        {{session::get('success')}}
                </div>
                @endif
                    <form action="{{ route('faqs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="pl-lg-4">

                            <div class="row">
                             <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="description">titre</label>
                                        <input class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Tapez votre texte ici"></textarea>
                                            @error('title') <div class="text-danger">{{ $message }}</div>@enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="description">Contenu</label>
                                        <textarea name="reponse" id="" cols="30" rows="8" class="summernote form-control @error('description') is-invalid @enderror"
                                            placeholder="Tapez votre texte ici"></textarea>
                                          @error('description') <div class="text-danger">{{ $message }}</div>@enderror


                                    </div>
                                </div>
                            </div>



                        </div>
                        <hr class="my-4" />


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
@include('admin.partials.summernote_js')

