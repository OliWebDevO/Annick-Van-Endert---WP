<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/styles/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/styles/styles.min.css">
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 
      <!-- Fav Icon -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <!-- Swiper Js -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
      <!-- animate css -->
      <link rel="stylesheet" href="<?php bloginfo("template_url")?>/plugins/animate.css/animate.css">
      <link rel="stylesheet" href="<?php bloginfo("template_url")?>/plugins/simple-lightbox.min.css">
      <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> -->
    <script src="https://kit.fontawesome.com/0144f75b4e.js" crossorigin="anonymous"></script>
    <title></title>
</head>

<body>
    <header>
        <div class="top-bar">
            <div class="breadcrumb">
                <a class="link" href="index.html">Accueil</a>
                <a class="link" href="gallerie.html">Séries de tableaux</a> 
                <a class="link" href="gallerie-artsenic.html">Artsenic</a>
                <a class="link" href="contact.html">Contact</a>
            </div>
            <div class="follow">
                <div class="f-text">
                    Suivez moi : 
                </div>
                <div class="f-social">
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn-lg-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <nav>
            <div class="n-logo">
                <h1>Annick</h1>
            </div>
            <div class="burger">
                <div class="bline"></div>
                <div class="bline"></div>
                <div class="bline"></div>
            </div>
            <div class="n-nav">
                <ul class="main-menu">
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>">Accueil</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/about">A propos</a>
                        <ul class="sub-menu">
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/about#annick">Annick</a>
                            </li>
                            <li>
                                <a  class="link" href="<?php bloginfo("url")?>/about#artsenic">Artsenic</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/gallery">Gallerie</a>
                        <ul class="sub-menu">
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/gallery">Annick</a>
                            </li>
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/galleryartsenic">Artsenic</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/news">News</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/livredor">Livre d'or</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="n-contact">
                <div class="n-phone flex-shrink-0 btn-lg-square border border-light rounded-circle">
                    <i class="fa fa-phone text-primary"></i>
                </div>
                <div class="n-details">
                    <div class="n-me">
                        <a href="">Me contacter</a>
                    </div>
                    <div class="n-mail">
                        <a href="">Annickvanendert@hotmail.com</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="b-nav">
            <div class="burger">
                <div class="bline"></div>
                <div class="bline"></div>
                <div class="bline"></div>
            </div>
            <ul class="main-menu">
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>">Accueil</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/about">A propos</a>
                        <ul class="sub-menu">
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/about#annick">Annick</a>
                            </li>
                            <li>
                                <a  class="link" href="<?php bloginfo("url")?>/about#artsenic">Artsenic</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/gallery">Gallerie</a>
                        <ul class="sub-menu">
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/gallery">Annick</a>
                            </li>
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/galleryartsenic">Artsenic</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/news">News</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/livredor">Livre d'or</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/contact">Contact</a>
                    </li>
                </ul>
        </div>
        <div class="hero-page"></div>
        <div class="title-page">
            <h2>A propos</h2>
        </div>
    </header>

    <!-- Start of page -->

    <div class="wrapper">
            <div class="about-box" id="annick">       
                <div class="wow animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="grid-imgs">
                            <img class="grid-img-1" src="<?php bloginfo("template_url")?>/img/art1.jpeg" alt="">                             
                            <img class="grid-img-2" src="<?php bloginfo("template_url")?>/img/art2.jpeg" alt="">
                            <img class="grid-img-3" src="<?php bloginfo("template_url")?>/img/projet1.jpeg" alt="">
                    </div>
                </div>
                <div class="s1-txt wow animate__fadeInUp" data-wow-delay="0.3s">
                    <h3 class="h3">
                        // A propos
                    </h3>
                    <h2 class="h2">
                        Annick Van Endert
                    </h2>
                    <p class="paragraph">
                        La vie "fête" de passions, de la couleur, des instants magiques, des rencontres fortuites, des folies créatrices, des rêves accomplis, des partages d'émotions, aimer, vibrer, toucher, agir...réagir, vivre sans oublier ses rêves, se perdre sans savoir si on retrouvera son chemin, respirer à s'en époumoner, vivre chaque instant comme si c'était le dernier.
                    </p>
                    <p class="paragraph">
                        Bienvenue dans mon espace créatif
                    </p>
                    <p class="paragraph">
                        La vie "fête" de passions, de la couleur, des instants magiques, des rencontres fortuites, des folies créatrices, des rêves accomplis, des partages d'émotions, aimer, vibrer, toucher, agir...réagir, vivre sans oublier ses rêves, se perdre sans savoir si on retrouvera son chemin, respirer à s'en époumoner, vivre chaque instant comme si c'était le dernier.
                    </p>
                </div>
            </div>
            <div class="about-box artscenic-about" id="artsenic">       
                <div class="s1-txt s2 wow animate__fadeInUp" data-wow-delay="0.3s">
                    <h3 class="h3">
                        // A propos
                    </h3>
                    <h2 class="h2">
                        Artsenic
                    </h2>
                    <p class="paragraph">
                        La vie "fête" de passions, de la couleur, des instants magiques, des rencontres fortuites, des folies créatrices, des rêves accomplis, des partages d'émotions, aimer, vibrer, toucher, agir...réagir, vivre sans oublier ses rêves, se perdre sans savoir si on retrouvera son chemin, respirer à s'en époumoner, vivre chaque instant comme si c'était le dernier.
                    </p>
                    <p class="paragraph">
                        Bienvenue dans mon espace créatif
                    </p>
                    <p class="paragraph">
                        La vie "fête" de passions, de la couleur, des instants magiques, des rencontres fortuites, des folies créatrices, des rêves accomplis, des partages d'émotions, aimer, vibrer, toucher, agir...réagir, vivre sans oublier ses rêves, se perdre sans savoir si on retrouvera son chemin, respirer à s'en époumoner, vivre chaque instant comme si c'était le dernier.
                    </p>
                </div>
                <div class="wow animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="grid-imgs">
                            <img class="grid-img-1" src="<?php bloginfo("template_url")?>/img/artsenic1.jpeg" alt="">                             
                            <img class="grid-img-2" src="<?php bloginfo("template_url")?>/img/artsenic2.jpeg" alt="">
                            <img class="grid-img-3" src="<?php bloginfo("template_url")?>/img/artsenic3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    <!-- End of page -->

    <div class="parrallax">
        <div class="parrallax-img"></div>
    </div>
    <button class="back-to-top"><i class="bi bi-arrow-up"></i></button>
    <footer>
        <div class="f-wrapper">
            <div class="f-contact">
                <div class="f-c">
                    <h3 class="footer-h3">Annick Van Endert</h3>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Olloy sur Viroin</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+32 498 56 45 29</p>
                    <p><i class="fa fa-envelope me-3"></i>Vanendertannick@example.com</p>
                </div>
                <div class="f-social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="f-menu">
                <h3 class="footer-h3">Menu</h3>
                <ul>
                    <a class="link" href="<?php bloginfo("url")?>">
                        <li>Accueil</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/about">
                        <li>A propos</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/gallery">
                        <li>Gallerie</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/news">
                        <li>News</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/livredor">
                        <li>Livre d'or</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/contact">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
            <div class="f-collection">
                <h3 class="footer-h3">Collections d'oeuvres</h3>
                <ul>
                    <a class="link" href="<?php bloginfo("url")?>/gallery">
                        <li>Annick</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/galleryartsenic">
                        <li>Artsenic</li>
                    </a>
                </ul>
            </div>
            <div class="f-gallery">
                <h3 class="footer-h3">Galerie Photo</h3>
                <div class="f-img-box">
                    <a href="gallerie.html"><img src=" <?php bloginfo("template_url")?>/img/motard1.jpg" alt=""></a>
                    <a href="gallerie.html"><img src=" <?php bloginfo("template_url")?>/img/art1.jpeg" alt=""></a>
                    <a href="gallerie.html"><img src=" <?php bloginfo("template_url")?>/img/projet1.jpeg" alt=""></a>
                    <a href="gallerie.html"><img src=" <?php bloginfo("template_url")?>/img/projet2.jpeg" alt=""></a>
                    <a href="gallerie.html"><img src=" <?php bloginfo("template_url")?>/img/art2.jpeg" alt=""></a>
                    <a href="gallerie.html"><img src=" <?php bloginfo("template_url")?>/img/gallery4.jpeg" alt=""></a>
                </div>
            </div>
        </div>
    </footer>

    <script defer src="<?php bloginfo("template_url")?>/scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php bloginfo("template_url")?>/plugins/wow.js/dist/wow.min.js"></script>
    <script src="<?php bloginfo("template_url")?>/plugins/lenis.min.js"></script> 
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/plugins/simple-lightbox.min.js"></script>

</body>

</html>