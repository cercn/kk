@extends('layouts.template')

@section('content')
    <section class="container-fluid bg-light d-flex flex-column align-items-center justify-content-center py-5">
        <h1 class="x-text-size-sm fs-3 text-uppercase">Toutes les catégories</h1>
        <div class="d-flex justify-content-center">
            <div class="bg-warning  x-deco"></div>
        </div>

    </section>


 <div class="container-fluid d-desktop">
    <div class="row py-5">

                @if (sizeof($categoriesall) > 0)
                    @foreach ($categoriesall as $categorie)
                        <div class="col-2 mb-4">
                                <div class="x-categories">
                                    <a href="{{ route('categorie', ['categorie' => $categorie->libelle]) }}"
                                        class="text-decoration-none text-muted text-center">
                                        <div class="d-flex justify-content-center mb-2">
                                            <img src="{{ asset('img/category.svg') }}" alt="{{ $categorie->libelle }}"
                                                class="x-category-img">

                                        </div>
                                        <p class="text-dark mb-0">{{ $categorie->libelle }}</p>


                                    </a>
                                </div>
                            </div>
                    @endforeach
                @endif
    </div>
</div>

    <div class="container-fluid py-3 d-mobile">

                @if (sizeof($categoriesall) > 0)
                    @foreach ($categoriesall as $categorie)
                       <div class="col-12 mb-4">
                                <div class="x-categories w-100 py-3 ">
                                    <a href="{{ route('categorie', ['categorie' => $categorie->libelle]) }}"
                                        class="text-decoration-none text-muted text-center">
                                        <div class="d-flex justify-content-center mb-2">
                                            <img src="{{ asset('img/category.svg') }}" alt="{{ $categorie->libelle }}"
                                                class="x-category-img">

                                        </div>
                                        <p class="text-dark mb-0">{{ $categorie->libelle }}</p>


                                    </a>
                                </div>
                            </div>
                    @endforeach
                @endif
    </div>
@endsection
