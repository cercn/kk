@extends('layouts.template')

@section('content')
    <section class="container-fluid bg-light d-flex flex-column align-items-center justify-content-center py-5">
        <h1 class="x-text-size-sm fs-3 text-uppercase"> ({{ sizeof($products) }}) Resultats pour :{{ $word }}</h1>
        <div class="d-flex justify-content-center">
            <div class="bg-warning  x-deco"></div>
        </div>



    </section>



    <section class="bg-white p-2 py-3">


        <div class="container-fluid bg-white">
            <div class="row">

                @if (sizeof($products) == 0)
                    <div class="container-fluid py-5 ">
                        <div class="text-warning h1 text-center"> <i class="fa fa-boxes fa-3x"></i> </div>

                        <div class="text-warning text-center x-text-size-fs6">Aucun produit {{ $word }} </div>
                    </div>
                @endif


                @if (sizeof($products) > 0)
                    @foreach ($products as $product)
                        <div class="x-colproducts d-desktop mb-3">
                            <a href="{{ route('produit', ['product' => $product->id]) }}"
                                class="text-decoration-none text-dark">
                                <div class="card border-0 x-colproducts-card">

                                    @if ($product->image)
                                        <img src="{{ asset($product->image) }}" alt="" class="x-products-img">
                                    @else
                                        <img src="{{ asset('img/defaultimg.png') }}" alt="" class="x-products-img">
                                    @endif
                                    <div class="card-body ps-1">
                                        <div class="card-text mb-2">{{ $product->nom }}</div>
                                        <div class="d-flex mb-2">
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="fas fa-star text-warning me-1"></i>
                                            <i class="far fa-star text-warning me-1"></i>
                                            <i class="far fa-star text-warning me-1"></i>

                                        </div>
                                        <h3 class="x-text-fs6">{{ $product->prix . ' XOF' }} </h3>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

                @if (sizeof($products) > 0)
                    @foreach ($products as $product)
                        <div class="col-12 d-mobile">

                            <div class="card border-0 ">
                                @if ($product->image)
                                    <img src="{{ asset($product->image) }}" alt="" class="">
                                @else
                                    <img src="{{ asset('img/defaultimg.png') }}" alt="" class="">
                                @endif
                                <div class="card-body ps-1">
                                    <div class="card-text mb-2">{{ $product->nom }}</div>
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-star text-warning me-1"></i>
                                        <i class="fas fa-star text-warning me-1"></i>
                                        <i class="fas fa-star text-warning me-1"></i>
                                        <i class="far fa-star text-warning me-1"></i>
                                        <i class="far fa-star text-warning me-1"></i>

                                    </div>
                                    <h3 class="x-text-fs6">{{ $product->prix . ' XOF' }} </h3>
                                    <a href="{{ route('produit', ['product' => $product->id]) }}"
                                        class="btn btn-success  text-white text-decoration-none text-dark">Voir les
                                        détails</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif






            </div>
        </div>
    </section>



@endsection
