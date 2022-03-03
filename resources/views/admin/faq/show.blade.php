@extends('admin.template')

@section('title', 'FAQ')
@section('subtitle', 'details-question')
@section('content')
    <div class="row">

        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Détails d'une question </h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('faqs.index') }}" class="btn btn-sm btn-dark">Toutes les questions</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="text-bold">Question </h3>

                    <div class="mb-3">{{$faq->question}} </div>
                    <h3 class="text-bold">Réponse </h3>

                    <div class="">{{$faq->reponse}} </div>

                </div>
            </div>
        </div>
    </div>
@endsection
