@extends('admin.template')
@section('title', 'FAQ')
@section('subtitle' , 'Liste des questions')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Liste des questions</h3>
            </div>
            <div class="col-4 text-right">
                <a href="{{ route('faqs.create')}}" class="btn btn-sm btn-dark">Nouvelle question</a>
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

                <th scope="col" class="sort" data-sort="image">question</th>
               <th scope="col" class="sort" data-sort="prix">reponse</th>
                <th scope="col" class="sort" data-sort="actions">Actions</th>



              </tr>
            </thead>
            <tbody >

              @foreach($faqs as $faq)

              @php
                  $question = Str::words($faq->question, 10, '');
                  $reponse = Str::words($faq->reponse, 10, '');
              @endphp

                <tr>

                  <td>{{$question.'...' }}</td>
                  <td>{{$reponse.'...' }}</td>

                  <td>

                    <div class="d-flex justify-content-evently">
                      <a href="{{ route('faqs.show' , ['faq'=>$faq->id]) }}" class=" mr-2 btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{ route('faqs.edit' , ['faq'=>$faq->id]) }}" class=" mr-2 btn btn-sm btn-success"><i class="fa fa-pencil-alt"></i></a>
                      <a href="" class="btn btn-sm btn-danger " type="button" data-toggle="modal" data-target="#{!!  \Illuminate\Support\Str::words($faq->question, 1, '') !!}"><i class="fa fa-trash"></i></a>
                    </div>

                 {{-- \Illuminate\Support\Str::words pour
                 pourvoir avoir un identifiant unique pour chaque modal
                 --}}


                 <div class="modal fade"

                     tabindex="-1" role="dialog" id="{!!  \Illuminate\Support\Str::words($faq->question, 1, '') !!}"
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
                                     action="{{ route('faqs.destroy',['faq'=>$faq->id])}}"
                                     method="POST"> @csrf
                                     @method('DELETE')

                                     <p class="font-weight-bold">Etes-vous sure de vouloir supprimer ce faq?
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

            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

@endsection
