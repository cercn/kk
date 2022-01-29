@extends('layouts.template')
@section('content')
    <section class="position-relative">

    <div class="fs-1 text-bold x-name-banner text-white"><span class="text-warning">XANOUMI</span> .com</div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active x-carousel-img">
      <img src="{{ asset('img/banner1.jpg')}}" class="x-carousel-img" alt="...">
    </div>
    <div class="carousel-item x-carousel-img">
      <img src="{{ asset('img/banner2.jpg')}}" class="x-carousel-img" alt="...">
    </div>
    <div class="carousel-item x-carousel-img">
      <img src="{{ asset('img/banner3.jpg')}}" class="x-carousel-img" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>


    <section class="bg-light  pt-5">
        <div class="container-fluid bg-white p-3 ">
            <div class="d-flex align-items-center mb-3">
                <h2 class="text-dark x-text-fs7">Nos meilleures ventes</h2>
                <div>
                    <a href="{{ route('categorie',['categorie'=>'products'])}}" class="text-warning text-decoration-none ms-3">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-light">
        <div class="row bg-white">
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

            
            
            
        </div>
        </div>
        <div class="bg-light p-4"></div>
    </section>

    <section class="bg-white p-2">
        <div class="container-fluid bg-white p-3 ">
            <div class="d-flex align-items-center mb-3">
                <h2 class="text-dark x-text-fs7">Nos différentes catégories</h2>
                <div>
                    <a href="" class="text-warning text-decoration-none ms-3">Voir plus</a>
                </div>
            </div>

            <div class="row ">
                <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div>

                <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Informatique <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Meubles  <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Vêtements  <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Equipements <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Télephones <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Loisirs <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Bureautique <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Promotions <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Meilleures ventes <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Linges <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="{{ route('categorie',['categorie'=>'products'])}}" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div>
            </div>
        </div>
</section>


    <section class="bg-light p-2 py-3">
        <div class="container-fluid bg-light p-3 ">
            <div class="d-flex align-items-center mb-3">
                <h2 class="text-dark x-text-fs7">Nos meilleures offres</h2>
                <div>
                    <a href="" class="text-warning text-decoration-none ms-3">Voir plus</a>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card border-0 shadow" >
                        <img src="{{ asset('img/offre1.jpg')}}" alt="" class="x-card-bestseller-img">
                        <div class="card-body">
                            <h5 class="fs-5 text-dark">Product name </h5>
                            <a href="" class="text-success x-text-fs-3 text-decoration-none">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow" >
                        <img src="{{ asset('img/offre2.png')}}" alt="" class="x-card-bestseller-img">
                        <div class="card-body">
                            <h5 class="fs-5 text-dark">Product name </h5>
                            <a href="" class="text-success x-text-fs-3 text-decoration-none">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow" >
                        <img src="{{ asset('img/offre4.jpg')}}" alt="" class="x-card-bestseller-img">
                        <div class="card-body">
                            <h5 class="fs-5 text-dark">Product name </h5>
                            <a href="" class="text-success x-text-fs-3 text-decoration-none">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow" >
                        <img src="{{ asset('img/offre3.jpg')}}" alt="" class="x-card-bestseller-img">
                        <div class="card-body">
                            <h5 class="fs-5 text-dark">Product name </h5>
                            <a href="" class="text-success x-text-fs-3 text-decoration-none">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>

    <section class="bg-white p-2 py-3">
        <div class="container-fluid bg-white p-3 ">
            <div class="d-flex align-items-center mb-3">
                <h2 class="text-dark x-text-fs7">Les plus demandés</h2>
                <div>
                    <a href="{{ route('categorie',['categorie'=>'products'])}}" class="text-warning text-decoration-none ms-3">Voir plus</a>
                </div>
            </div>
        </div>

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

            
        </div>
        </div>
    </section>

    <div class="bg-warning p-2 py-4 container-fluid"></div>
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
 
    @endSection