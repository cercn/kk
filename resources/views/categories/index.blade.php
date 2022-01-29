@extends('layouts.template')

@section('content')
<section class="container-fluid bg-light d-flex flex-column align-items-center justify-content-center py-4">
        <h1 class="x-text-size-sm fs-3">Electromenagers</h1>
        <div class="d-flex justify-content-center">
            <div class="bg-warning  x-deco"></div>
        </div>
        <div>Nous vous proposons les equipements qu'il vous faut </div>
</section>



<section class="bg-white p-2 py-3">
        

        <div class="container-fluid bg-white">
        <div class="row">
        <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/offre1.jpg')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">MacBook Air M1</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">1 000 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>


            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/product1.png')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">MacBook Air M1 2021</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">1 100 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>

            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/offre3.jpg')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Salopette</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">5 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>

            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/product3.jpg')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Micro-ondes Camif </div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">150 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>


            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/product2.png')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">HDD externe Samsung</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">35 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>


            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/offre4.jpg')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Lit 8ème Génération</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">500 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>

            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/product2.png')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">HDD externe Samsung</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">35 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>


            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/product3.jpg')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Micro-ondes Camif </div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">150 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>

            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/offre1.jpg')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">MacBook Air M1</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">1 000 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>

            
            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/offre4.jpg')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Lit 8ème Génération</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">500 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>

            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/product1.png')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">MacBook Air M1 2021</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">1 100 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>

            <div class="x-colproducts">
                <a href="{{ route('product', ['categorie'=> 'products', 'product'=>1 ])}}" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="{{ asset('img/offre3.jpg')}}" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Salopette</div>
                        <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
                        </div>
                        <h3 class="x-text-fs6">5 000 X0F </h3>
                       
                    </div>
                </div>
                </a> 
            </div>
            

               
        </div>
        </div>
    </section>


    <section class="p-4 bg-dark text-center">
            <div>
            <h3 class="text-white" >Nos fournisseurs</h3>
            </div>

            <div class="text-white mt-2" ><span class="text-warning">XANOUMI</span> .com </div>

            <div class="container px-5 text-white d-flex justify-content-center mt-2">
            <div class="col-6 d-flex justify-content-between">
                <span class="text-white">Bénin</span>
                <span class="text-white">Togo</span>
                <span class="text-white">Nigéria</span>
                <span class="text-white">Burkina-faso</span>
                <span class="text-white">France</span>
                <span class="text-white">Chine</span>
                <span class="text-white">Italie</span>
                <span class="text-white">Australie</span>
                <span class="text-white">Etats-Unis</span>
            </div>
            </div>
            
              
    </section>
@endsection