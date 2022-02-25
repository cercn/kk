<nav class="navbar navbar-expand-lg navbar-light bg-white text-dark">
    <div class="container-fluid">
        <a class="navbar-brand x-mx-4" href="{{ route('accueil') }}"><span class="text-warning">XANOUMI</span> .com</a>
        <button class="navbar-toggler x-btn-menu border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-th"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto d-desktop">
                <div class="col-12">
                    <form id="formRecherche"  method="post" action="{{ route('searchproducts')}}" class="x-form-header">
                    @csrf()
                        <div class="input-group rounded-pill">
                            <input type="search" name="product" class="form-control  rounded-pill x-form-control"
                                placeholder="De quoi avez-vous besoin ?">
                            <span type="submit"  onclick="document.getElementById('formRecherche').submit()"  class="input-group-text border-0 bg-warning text-white ms-2 rounded-pill "><i
                                    class="fas fa-search "></i></span>
                        </div>
                    </form>
                </div>



            </ul>
            <ul class="nav ms-auto me-5 x-nav-header ">
            @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link x-nav-link text-muted"> <i
                            class="fas fa-user"></i> Connexion </a></li>
            @else
            <li class="nav-item"><a href="{{ route('admin-panel') }}" class="nav-link x-nav-link text-muted"> <i
                            class="fas fa-bars"></i> Tableau de bord </a></li>
            @endguest
                <li class="nav-item"><a href="" class="nav-link x-nav-link text-muted"> <i class="fas fa-shopping-cart"></i>
                        Panier </a></li>
                <li class="nav-item "><a href="" class="nav-link x-nav-link text-muted"> <i
                            class="fas fa-question-circle"></i> Aide </a></li>

            </ul>
            <ul class="navbar-nav mx-auto d-mobile">
                <div class="col-12">
                    <form id="formRecherche"  method="post" action="{{ route('searchproducts')}}" class="x-form-header">
                    @csrf()
                        <div class="input-group rounded-pill">
                            <input type="search" name="product" class="form-control  rounded-pill x-form-control"
                                placeholder="De quoi avez-vous besoin ?">
                            <span type="submit"  onclick="document.getElementById('formRecherche').submit()"  class="input-group-text border-0 bg-warning text-white ms-2 rounded-pill "><i
                                    class="fas fa-search "></i></span>
                        </div>
                    </form>
                </div>



            </ul>
        </div>
    </div>
</nav>



