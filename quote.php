<!DOCTYPE html>
<html lang="en">

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
                    <a href="formations.php" class="nav-item nav-link">Formations</a>
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
                <a href="#" class="btn btn-primary py-2 px-4 ms-3">Demander un devis</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5" style="margin-bottom: 90px;  background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(img/pexels.jpg) center center no-repeat; background-size: cover;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Demande de devis</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">Demande de devis</h1>
                    </div>
                    <div class="row gx-3">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Recevez une réponse dans les 24h</h5>
                    </div>
                    <p class="mb-4">Obtenez un devis gratuitement pour votre projet <br/> 
                        Consultez l'avis d'un expert pour être sûr d'avoir un résultat qui satisfait vos attentes <br/>
                        Contactez-nous pour plus de détails ou soumettez le formulaire avec les informations demandées <br/>
                        Nous vous contacterons dans les 24h <br/>
                        Vous pouvez aussi nous contacter via WhatsApp</p>
                        <a href="tel:00221777777777">
                            <h5 class="text-dark"><i class="fa fa-phone-alt me-3"></i>+221 77 777 77 77</h5>
                        </a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded h-100 d-flex align-items-center p-5 wow zoomIn" style="background: rgba(9, 30, 62, .7);" data-wow-delay="0.9s">
                        <form action="devis.php" method="POST">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Saisissez votre nom" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Saisissez votre email" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Selectionner un service</option>
                                        <option>Création de site web</option>
                                        <option>Maintenance de site</option>
                                        <option>Administration de site</option>
                                        <option>Web design</option>
                                        <option>Montage photo</option>
                                        <option>Montage vidéo</option>
                                        <option>Gestion de newsletter</option>
                                        <option>Community Management</option>
                                        <option>Stratégie Marketing</option>
                                        <option>Référencement SEO</option>
                                        <option>Conception de flyers, carte de visite, etc.</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Ajouter une description"></textarea>
                                </div>
                                <div>
                                    <input type="file" class="form-control" name="fichier">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Soumettre</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <?php include "footer.php"; ?>

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