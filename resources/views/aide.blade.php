@extends('layouts.template')

@section('content')
    <section class="container-fluid bg-light d-flex flex-column align-items-center justify-content-center py-5">
        <h1 class="x-text-size-sm fs-3 text-uppercase">Foire aux questions</h1>
        <div class="d-flex justify-content-center">
            <div class="bg-warning  x-deco"></div>
        </div>

    </section>

    <div class="container d-desktop py-5">
        <div class="accordion rounded-0 border-0" id="accordionExample">

            @foreach ($faqs as $faq)
                @php
                    $dataId = chr(rand(97, 122));
                @endphp

                <div class="accordion-item rounded-0 ">
                    <h2 class="accordion-header" id="{{ 'heading' . $dataId }}">
                        <button class="accordion-button rounded-0 x-accordion-item " type="button" data-bs-toggle="collapse"
                            data-bs-target="{{ '#collapse' . $dataId }}" aria-expanded="true"
                            aria-controls="{{ 'collapse' . $dataId }}">
                            {{ $faq->question }}
                        </button>
                    </h2>
                    <div id="{{ 'collapse' . $dataId }}" class="accordion-collapse rounded-0  collapse"
                        aria-labelledby="{{ 'heading' . $dataId }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body rounded-0 ">
                            {{ $faq->reponse }}
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>

    <div class="container-fluid py-3 d-mobile">


         <div class="accordion rounded-0 border-0" id="accordionExample">

            @foreach ($faqs as $faq)
                @php
                    $dataId = chr(rand(97, 122));
                @endphp

                <div class="accordion-item rounded-0 ">
                    <h2 class="accordion-header" id="{{ 'heading' . $dataId }}">
                        <button class="accordion-button rounded-0 x-accordion-item " type="button" data-bs-toggle="collapse"
                            data-bs-target="{{ '#collapse' . $dataId }}" aria-expanded="true"
                            aria-controls="{{ 'collapse' . $dataId }}">
                            {{ $faq->question }}
                        </button>
                    </h2>
                    <div id="{{ 'collapse' . $dataId }}" class="accordion-collapse rounded-0  collapse"
                        aria-labelledby="{{ 'heading' . $dataId }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body rounded-0 ">
                            {{ $faq->reponse }}
                        </div>
                    </div>
                </div>
            @endforeach



        </div>

    </div>
@endsection
