<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ env('APP_NAME') }} </title>

    <!-- styles -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   
</head>
<body>
    
    <main>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white text-dark">
  <div class="container-fluid">
    <a class="navbar-brand mx-4" href="#"><span class="text-warning">XANOUMI</span> .com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
          <div class="col-12">
          <form action="">
       <div class="input-group rounded-pill">
  <input type="search" class="form-control  rounded-pill x-form-control" placeholder="De quoi avez-vous besoin ?" >
  <span class="input-group-text bg-white ms-2 rounded-pill "><i class="fas fa-search text-muted "></i></span>
</div>       
    </form>
          </div>
       

    
      </ul>
      <ul class="nav ms-auto me-5 " >
          <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fas fa-user"></i> Connexion </a></li>
          <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fas fa-shopping-cart"></i> Panier </a></li>
          <li class="nav-item "><a href="" class="nav-link text-muted"> <i class="fas fa-question-circle"></i> Aide </a></li>

      </ul>
    </div>
  </div>
</nav>


<ul class="nav bg-warning text-white justify-content-around">
    <li class="nav-item"><a href="" class="nav-link text-white">Nouveautés</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Meilleures ventes</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Informatique et Bureautique</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Electromenagers</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white" >Vêtements et linges</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Equipements</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Téléphones</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Loisirs</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Meubles</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Service client</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Promotions</a></li>

</ul>

</header>

   


    <section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active x-carousel-img">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item x-carousel-img">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item x-carousel-img">
      <img src="..." class="d-block w-100" alt="...">
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
                    <a href="" class="text-warning text-decoration-none ms-3">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-light">
        <div class="row bg-white">
            <div class="x-colproducts">
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
            </div><div class="x-colproducts">
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
            </div><div class="x-colproducts">
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div>

                <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
                </div> <div class="col-2 mb-3 gx-5">
                <a href="" class="btn x-btn-products x-text-fs4 px-3 w-100 py-2">Electroménagers <i class="fas fa-chevron-right ms-3 text-warning"></i> </a>
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
                        <img src="" alt="" class="x-card-bestseller-img">
                        <div class="card-body">
                            <h5 class="fs-5 text-dark">Product name </h5>
                            <a href="" class="text-success x-text-fs-3 text-decoration-none">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow" >
                        <img src="" alt="" class="x-card-bestseller-img">
                        <div class="card-body">
                            <h5 class="fs-5 text-dark">Product name </h5>
                            <a href="" class="text-success x-text-fs-3 text-decoration-none">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow" >
                        <img src="" alt="" class="x-card-bestseller-img">
                        <div class="card-body">
                            <h5 class="fs-5 text-dark">Product name </h5>
                            <a href="" class="text-success x-text-fs-3 text-decoration-none">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow" >
                        <img src="" alt="" class="x-card-bestseller-img">
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
                    <a href="" class="text-warning text-decoration-none ms-3">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-white">
        <div class="row">
            <div class="x-colproducts">
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
            </div><div class="x-colproducts">
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
            </div><div class="x-colproducts">
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
                <a href="" class="text-decoration-none text-dark">
                <div class="card border-0 x-colproducts-card">
                    <img src="" alt="" class="x-products-img">
                    <div class="card-body ps-1">
                        <div class="card-text mb-2">Name of product complete</div>
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
    <footer class="bg-light p-2">
        
    <div class="container py-3 ">
    
    <form action="" class="row" >
        <div class="col-3">
        <label for="" class="text-label text-muted"> Abonnez-vous à la newsletter </label>

        </div>
        <div class="col-7">
        <input type="email" name="email" id="email" class="form-control rounded-pill" placeholder="Entrer votre adresse email" > 

        </div>
        <div class="col-2 text-center">
        <button type="submit" class="btn btn-warning text-white rounded-pill px-5"> Envoyer &nbsp; <i class="fas fa-paper-plane"></i> </button>

        </div>
    </form>
        
        
    </div>

<div class="container  py-3">
    <div class="row">
        <div class="col-9 d-flex justify-content-center">
            <nav class="nav d-flex">
            <a href="" class="nav-link text-dark"> Service client</a>
            <a href="" class="nav-link text-dark"> A propos de nous</a>
            <a href="" class="nav-link text-dark">Nous contacter</a>
            </nav>
        </div>
        <div class="col-3 ">
            <ul class="nav">
                <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fab fa-facebook"></i> </a></li>
                <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fab fa-linkedin"></i> </a></li>

                <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fab fa-twitter"></i> </a></li>

            </ul>
        </div>
    </div>
</div>

<div class="p-3 "><div class="border-bottom"></div>


<div class="container d-flex justify-content-center py-3">
    <ul class="nav x-nav">
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Politique de liste de produits </a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Protection de la propriété intellectuelle</a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Politique de confidentialité</a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Conditions d'utilisation</a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Informations utilisateur </a></li>
        <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Guide de demande juridique</a></li>        
    </ul>
</div>

<div class="container d-flex justify-content-center py-2" >
    <span class="text-muted x-text-copy"> &copy XANOUMI .com | Tous droits réservés.</span>
</div>
        
</footer>  


</main>
    <!-- JavaScript -->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>