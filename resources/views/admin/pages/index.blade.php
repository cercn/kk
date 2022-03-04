@extends('admin.template')
@section('title', 'Pages')
@section('subtitle' , 'Liste des pages')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Liste des pages</h3>
            </div>
            <div class="col-4 text-right">
                <a href="{{ route('pages.create')}}" class="btn btn-sm btn-dark">Nouvelle page</a>
            </div>
        </div>
        </div>

        @if(Session::has('success'))
                <div class="alert alert-success rounded-0" role="alert">
                        {{session::get('success')}}
                </div>
                @endif
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>

                <th scope="col" class="sort" data-sort="image">title</th>
               <th scope="col" class="sort" data-sort="prix">slug</th>
                <th scope="col" class="sort" data-sort="resume">resume</th>
                 <th scope="col" class="sort" data-sort="actions">Actions</th>




              </tr>
            </thead>
            <tbody >

            @if(sizeof($pages) > 0)

              @foreach($pages as $page)



                <tr>

                  <td>{{$page->title }}</td>
                  <td>{{$page->slug}}</td>
                   <td>{{resume_page_content($page->description)}}</td>

                  <td>

                    <div class="d-flex justify-content-evently">
                      <a href="{{ route('display-page' , ['slug' => $page->slug]) }}" class=" mr-2 btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{ route('pages.edit' , ['page'=>$page->id]) }}" class=" mr-2 btn btn-sm btn-success"><i class="fa fa-pencil-alt"></i></a>
                      <a href="" class="btn btn-sm btn-danger " type="button" data-toggle="modal" data-target="#{!!  \Illuminate\Support\Str::words($page->page, 1, '') !!}"><i class="fa fa-trash"></i></a>
                    </div>

                 {{-- \Illuminate\Support\Str::words pour
                 pourvoir avoir un identifiant unique pour chaque modal
                 --}}


                 <div class="modal fade"

                     tabindex="-1" role="dialog" id="{!!  \Illuminate\Support\Str::words($page->page, 1, '') !!}"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                             <div class="modal-header">

                                 <h5 class="modal-title font-weight-bold text-danger"
                                     id="exampleModalLongTitle">
                                     Confirmation de la suppression
                                 </h5>
                                 <button type="button" class="close" data-dismiss="modal"
                                     aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">

                                 <form id="delete-reponse"
                                     action="{{ route('pages.destroy',['page'=>$page->id])}}"
                                     method="POST"> @csrf
                                     @method('DELETE')

                                     <p class="font-weight-bold">Etes-vous sure de vouloir supprimer ce page?
                                     </p>
                                     <button class="btn btn-success pull-right"
                                         type="submit">Confirmer</button>
                                     <button type="button"
                                         class="btn btn-outline-danger pull-right"
                                         data-dismiss="modal">Annuler</button>

                                 </form>
                             </div>

                         </div>
                     </div>
                 </div>


                  </td>
                </tr>
              @endforeach

              @else

              <tr>
                <td colspan="4">Aucune page disponible </td>
              </tr>


              @endif

            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

@endsection
