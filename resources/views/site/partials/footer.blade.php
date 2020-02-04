<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-dark white">
    <div class="container">
        <section class="footer-top padding-top">
            <div class="row">
                <aside class="col-sm-12 col-md-3 white">
                    <img src="{{ asset('frontend/images/logo-naturavignon.jpg') }}"> 
                    <p>
                        Laboratoire NaturAvignon BP 51022 84096 Avignon Cedex 9
                    </p>
                </aside>
                <aside class="col-sm-12  col-md-4 white">
                    <h5 class="title">Une question ?</h5>
                    <ul class="list-unstyled">
                        <li> <a href="#"> FAQ (Foire Aux Questions) </a></li>
                        <li> <a href="#"> Contact </a></li>
                        <li> <a href="#"> Service client : 04 88 70 00 25  </a></li>
                        <li> <a href="#"> Du lundi au vendredi de 9h00 à 17h </a></li>
                    </ul>
                </aside>
                <aside class="col-sm-12  col-md-4 white">
                    <h5 class="title">Argel 7 ®</h5>
                    <ul class="list-unstyled">
                        <li> <a href="{{ route('home') }}"> La gamme Argel 7 ® </a></li>
                        <li> <a href="{{ route('effet-froid') }}"> L'effet froid </a></li>
                        <li> <a href="{{ route('efficacite') }}"> L'efficacité </a></li>
                        <li> <a href="{{ route('bienfaits-du-massage') }}"> Les bienfaits du massage </a></li>
                        <li> <a href="{{ route('temoignages') }}"> Vos témoignages </a></li>
                    </ul>
                </aside>
                <!-- <aside class="col-sm-3">
                    <article class="white">
                        <h5 class="title">Contacts</h5>
                        <p>
                            <strong>Phone: </strong> +123456789
                            <br>
                            <strong>Fax:</strong> +123456789
                        </p>

                        <div class="btn-group white">
                            <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i
                                    class="fab fa-facebook-f  fa-fw"></i></a>
                            <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i
                                    class="fab fa-instagram  fa-fw"></i></a>
                            <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i
                                    class="fab fa-youtube  fa-fw"></i></a>
                            <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i
                                    class="fab fa-twitter  fa-fw"></i></a>
                        </div>
                    </article>
                </aside> -->
            </div>
            <!-- row.// -->
            <br>
        </section>
        <section class="footer-bottom row border-top-white">
            <div class="col-sm-6">
                <p class="text-white-50"> <a href="{{ route('conditions-generales-de-ventes') }}" >Conditions générales de vente</a> | <a href="{{ route('mentions-legales') }}" >Mentions légales</a></p>

            </div>
            <div class="col-sm-6">
                <p class="text-md-right text-white-50">
                    Copyright &copy
                    <br>
                    <a href="http://bootstrap-ecommerce.com" class="text-white-50">NaturAvignon </a>
                </p>
            </div>
        </section>
        <!-- //footer-top -->
    </div>
    <!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
