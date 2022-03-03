<section class="p-4 bg-dark text-center">
    <div>
        <h3 class="text-white">Nos fournisseurs</h3>
    </div>

    <div class="text-white mt-2"><span class="text-warning">XANOUMI</span> .com </div>

    <div class="d-desktop-flex container px-5 text-white d-flex justify-content-center mt-2 ">
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

    <div class="container-fluid px-3 text-white d-flex justify-content-center mt-2 flex-wrap d-mobile">

        <span class="text-white me-2 ">Bénin</span>
        <span class="text-white me-2 ">Togo</span>
        <span class="text-white me-2 ">Nigéria</span>
        <span class="text-white me-2 ">Burkina-faso</span>
        <span class="text-white me-2 ">France</span>
        <span class="text-white me-2 ">Chine</span>
        <span class="text-white me-2 ">Italie</span>
        <span class="text-white me-2 ">Australie</span>
        <span class="text-white me-2 ">Etats-Unis</span>

    </div>





</section>
<footer class="bg-light p-2">

    <div class="container py-3 ">

        <form id="newsletterForm" name="newsletterForm" class="d-desktop elementA" method="post">
            @csrf()
            <div class="row">
                <div class="col-3">
                    <label for="" class="text-label text-muted"> Abonnez-vous à la newsletter </label>

                </div>
                <div class="col-7">
                    <input type="email" name="email" id="emailNewsletter" class="form-control rounded-pill"
                        placeholder="Entrer votre adresse email">

                        <span class="" id="newsletterResponse"></span>

                </div>
                <div class="col-2 text-center">
                    <button type="submit" class="btn btn-warning text-white rounded-pill px-4 " id='newsletter-btn'>
                       <i class="fas fa-spinner fa-pulse text-white me-2 d-none" id="FormNewsletterIcone"></i> Envoyer &nbsp; <i class="fas fa-paper-plane"></i> </button>

                </div>
            </div>
        </form>

        <form id="newsletterForm" name="newsletterForm" method="post" class="row d-mobile">
        @csrf()
            <div class="col-12 mb-3">
                <label for="" class="text-label text-muted"> Abonnez-vous à la newsletter </label>

            </div>
            <div class="col-12 mb-3">
                <input type="email" name="email"  id="emailNewsletter" class="form-control rounded-pill"
                    placeholder="Entrer votre adresse email">

               <span class="" id="newsletterResponse"></span>


            </div>
            <div class="col-12 ">
                <button type="submit" class="btn btn-warning text-white rounded-pill px-3 x-fs-3" id='newsletter-btn'> <i class="fas fa-spinner fa-pulse text-white me-2 d-none" id="FormNewsletterIcone"></i> Envoyer &nbsp; <i
                        class="fas fa-paper-plane"></i> </button>

            </div>
        </form>


    </div>

    <div class="container d-desktop py-3">
        <div class="row ">
            <div class="col-9 d-flex justify-content-center d-desktop">
                <nav class="nav d-flex">
                    <a href="" class="nav-link text-dark"> Service client</a>
                    <a href="" class="nav-link text-dark"> A propos de nous</a>
                    <a href="" class="nav-link text-dark">Nous contacter</a>
                </nav>
            </div>
            <div class="col-3 ">
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fab fa-facebook"></i>
                        </a></li>
                    <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fab fa-linkedin"></i>
                        </a></li>

                    <li class="nav-item"><a href="" class="nav-link text-muted"> <i class="fab fa-twitter"></i>
                        </a></li>

                </ul>
            </div>
        </div>


    </div>
    <div class="container-fluid d-flex  d-mobile">
        <div class="row">
            <div class="col-9 ">

                <a href="" class="nav-link text-dark"> Service client</a>
                <a href="" class="nav-link text-dark"> A propos de nous</a>
                <a href="" class="nav-link text-dark">Nous contacter</a>

            </div>
            <div class="col-3">
                <a href="" class="nav-link text-muted"> <i class="fab fa-facebook"></i> </a>
                <a href="" class="nav-link text-muted"> <i class="fab fa-linkedin"></i> </a>

                <a href="" class="nav-link text-muted"> <i class="fab fa-twitter"></i> </a>

            </div>
        </div>
    </div>

    <div class="p-3 ">
        <div class="border-bottom"></div>


        <div class="container d-flex justify-content-center py-3">
            <ul class="nav x-nav">
                <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Politique de liste
                        de produits </a></li>
                <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Protection de la
                        propriété intellectuelle</a></li>
                <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Politique de
                        confidentialité</a></li>
                <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Conditions
                        d'utilisation</a></li>
                <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Informations
                        utilisateur </a></li>
                <li class="nav-item"><a href="" class="nav-link text-muted x-nav-footer-text">Guide de demande
                        juridique</a></li>
            </ul>
        </div>

        <div class="container d-flex justify-content-center py-2">
            <span class="text-muted x-text-copy"> &copy XANOUMI .com | Tous droits réservés.</span>
        </div>
</footer>


@push('scripts')
    <script>
        $(document).ready(function() {

            $('.elementA').addClass('d-none');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#newsletter-btn").click(function(e) {

                e.preventDefault();

                $('#FormNewsletterIcone').removeClass('d-none');

                let email = $('#emailNewsletter').val();

                var route_url = "{{ route('newsletter-register') }}";

                var formData = {
                    'email': email,
                };


                $.ajax({
                    url: route_url,
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#FormNewsletterIcone').addClass('d-none');
                        $('#newsletterForm').trigger("reset");
                        $('#newsletterResponse').removeClass("text-danger");
                         $('#newsletterResponse').addClass("text-success");
                         $('#newsletterResponse').text(response);
                    },
                    error: function(error){
                        $('#FormNewsletterIcone').addClass('d-none');
                        $('#newsletterForm').trigger("reset");
                        $('#newsletterResponse').removeClass("text-success");
                        $('#newsletterResponse').addClass("text-danger");
                        $('#newsletterResponse').text(error.responseJSON.email[0]);

                    }

                });
            });

        });
    </script>
@endpush
