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
    <nav class="navbar navbar-expand-lg navbar-light bg-white text-black">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">XANOUMI .com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
          <div class="col-12">
          <form action="">
       <div class="input-group mb-3 rounded-pill">
  <input type="search" class="form-control border-end-0 rounded-pill" placeholder="De quoi avez-vous besoin ?"  aria-describedby="basic-addon2">
  <span class="input-group-text bg-white border-start-0 rounded-pill " id="basic-addon2"><i class="fas fa-search"></i></span>
</div>       
    </form>
          </div>
       

    
      </ul>
      <ul class="nav ms-auto" >
          <li class="nav-item"><a href="" class="nav-link text-black"> <i class="fas fa-user"></i> Connexion </a></li>
          <li class="nav-item"><a href="" class="nav-link text-black"> <i class="fas fa-boxes"></i> Panier </a></li>
          <li class="nav-item"><a href="" class="nav-link text-black"> <i class="fas fa-question-circle"></i> Aide </a></li>

      </ul>
    </div>
  </div>
</nav>


<ul class="nav bg-warning text-white">
    <li class="nav-item"><a href="" class="nav-link text-white">Nouveautés</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Meilleures ventes</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Informatique et Bureautique</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Electromenagers</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white" >Vêtements et linges</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Equipements</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Loisirs</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Service client</a></li>
    <li class="nav-item"><a href="" class="nav-link text-white">Promotions</a></li>

</ul>

</header>

    </main>


    <section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active x-carousel-img ">
      <img src="..." class="x-carousel-img" alt="...">
    </div>
    <div class="carousel-item x-carousel-img">
      <img src="..." class="x-carousel-img" alt="...">
    </div>
    <div class="carousel-item x-carousel-img">
      <img src="..." class="x-carousel-img" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>


    <section class="bg-light p-2">
        <div class="container-fluid bg-white p-3">
            <div class="d-flex align-items-center">
                <h2 class="text-black">Meilleures ventes tech</h2>
                <div>
                    <a href="" class="text-warning text-decoration-none ms-2">Voir plus</a>
                </div>
            </div>
            
        </div>

    </section>

    <section class="bg-light p-2">
        <div class="container-fluid bg-white p-3">
            <div class="d-flex align-items-center">
                <h2 class="text-black">Les différentes catégories</h2>
                <div>
                    <a href="" class="text-warning text-decoration-none ms-2">Voir plus</a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="" class="text-black text-decoration-none border-success">Electromenagers <i class="fas fa-chevron-right"></i> </a>
                </div>
            </div>
            
        </div>


        
    </section>

    <section class="bg-light p-2">
        <div class="container-fluid bg-white p-3">
            <div class="d-flex align-items-center">
                <h2 class="text-black">Meilleures ventes tech</h2>
                <div>
                    <a href="" class="text-warning text-decoration-underline ms-2">Voir plus</a>
                </div>
            </div>
            
        </div>
        
    </section>

    <section class="bg-light p-2">
        <div class="container-fluid bg-white p-3">
            <div class="d-flex align-items-center">
                <h2 class="text-black">Meilleures ventes tech</h2>
                <div>
                    <a href="" class="text-warning text-decoration-underline ms-2">Voir plus</a>
                </div>
            </div>
            
        </div>
        
    </section>

    
    


    <!-- JavaScript -->

    <script src="{{ asset('js/bootstrap.bundle.min.js')"></script>
</body>
</html>