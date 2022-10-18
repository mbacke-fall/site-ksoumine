<!DOCTYPE html>
<html lang="fr">

<?php include "header.php"; ?>

<body>

    <?php include "topbar.php"; ?>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <img src="img/klogo.png" width="90px" height="80px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Accueil</a>
                    <a href="services.php" class="nav-item nav-link">Services</a>
                    <a href="#" class="nav-item nav-link active">Formations</a>
                    <!--<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>-->
                    <a href="about.php" class="nav-item nav-link">A Propos</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="quote.php" class="btn btn-primary py-2 px-4 ms-3">Demander un devis</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5" style="margin-bottom: 90px;  background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(img/bg2.jpg) center center no-repeat; background-size: cover;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Formations</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Des formations de qualité et efficace pour vous améliorer à votre rythme</h1>
            </div>
                <div class="row">
                  <div class="col-md-6 col-lg-6 mb-4">
                    <div class="news-1" style="background-image: url('img/outils.jpg');">
                      <div class="text">
                        <h3><a href="#" class="text-primary">Graphisme & Montage vidéo</a></h3>
                        <p class="mb-4">Une formation sur l'utilisation des logiciels célèbres Adobe PhotoShop, Adobe Illustrator, Adobe InDesign, Adobe XD, Adobe After Effect, Première Pro, Final Cut Pro</p>
                        <a href="#" class="d-block arrow-wrap"><span>S'inscrire</span></a>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-6 col-lg-6 mb-4">
                    <div class="news-1" style="background-image: url('img/code.jpg');">
                      <div class="text">
                        <h3><a href="#" class="text-primary">Administration de site web</a></h3>
                        <p class="mb-4">Une formation axée sur le back office d'un site web, la gestion du CMS, la résolution de bugs mineurs, la mise en ligne d'articles, les paramétrages, les statistiques</p>
                        <a href="#" class="d-block arrow-wrap"><span>S'inscrire</span></a>
                      </div>
                    </div>
                  </div>

                 <!-- <div class="col-md-6 col-lg-6 mb-4">
                    <div class="news-1" style="background-image: url('img/img_4.jpg');">
                      <div class="text">
                        <h3><a href="#" class="text-primary">Marketing Digital</a></h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="d-block arrow-wrap"><span>S'inscrire</span></a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 mb-4">
                    <div class="news-1" style="background-image: url('img/img_6.jpg');">
                      <div class="text">
                        <h3><a href="#" class="text-primary">Consectetur adipisicing elit</a></h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="d-block arrow-wrap"><span>S'inscrire</span></a>
                      </div>
                    </div>
                  </div>-->
                </div>
            </div>
        </div>
    <!-- Service End -->

    <?php include "footer.php"; ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>