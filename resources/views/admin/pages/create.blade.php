@extends('admin.template')




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
                            <a href="{{ route('pages.index') }}" class="btn btn-sm btn-dark">Toutes les pages</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">


                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                        {{session::get('success')}}
                </div>
                @endif
                    <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="pl-lg-4">

                            <div class="row">
                             <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="description">Titre</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Tapez votre texte ici">
                                            @error('title') <div class="text-danger">{{ $message }}</div>@enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="description">Contenu</label>
                                        <textarea name="description" id="tinymce" cols="30" rows="8" class="form-control @error('description') is-invalid @enderror"
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

@push('scripts')
<script src="https://cdn.tiny.cloud/1/3w7c9bgk6w991dge1a30743wl3dp54p6jr2iczi5qhol08y8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
      selector: 'textarea#tinymce',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
      language: 'fr_FR'
    });
  </script>
@endpush



