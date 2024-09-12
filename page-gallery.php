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
                <a class="link" href="<?php bloginfo("url")?>">Accueil</a>
                <a class="link" href="<?php bloginfo("url")?>/gallery">Séries de tableaux</a> 
                <a class="link" href="<?php bloginfo("url")?>/galleryartsenic">Artsenic</a>
                <a class="link" href="<?php bloginfo("url")?>/contact">Contact</a>
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
                        <a class="link" href="<?php bloginfo("url")?>/gallery">Galerie</a>
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
                        <a class="link" href="<?php bloginfo("url")?>/gallery">Galerie</a>
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
            <h2>Galerie</h2>
        </div>
    </header>

    <!-- Start of page -->

    <div class="gallery-section">
        <div class="wrapper">
            <div class="gallery-btns button-group filterizr-filter">
                <button class="btn-1 gal"><a href="<?php bloginfo("url")?>/gallery">Annick</a></button>
                <button class="btn-1 gal"><a href="<?php bloginfo("url")?>/galleryartsenic">Artsenic</a></button>
            </div>
            <div class="gallery-btns2 g-btns-2 button-group filterizr-filter">
                <button class="btn-1 gal" data-filter="*">All</button>
                <button class="btn-1 gal" data-filter="toile">Toiles</button>
                <button class="btn-1 gal" data-filter="dessin">Dessins</button>
                <button class="btn-1 gal" data-filter="2017">Sculptures</button>
                <button class="btn-1 gal" data-filter="2014">Divers</button>
            </div>
            <div class="gallery">
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery1.jpeg"><img class="filtr-item" data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery1.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery2.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery2.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery3.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery3.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery4.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery4.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery5.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery5.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery6.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery6.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery7.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery7.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery8.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery8.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery9.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery9.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery10.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery10.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery11.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery11.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery12.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery12.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery13.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery13.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery14.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery14.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery15.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery15.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery16.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery16.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery17.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery17.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery18.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery18.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery19.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery19.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery20.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery20.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery21.jpeg"><img data-filter="dessin" src=" <?php bloginfo("template_url")?>/img/gallery/gallery21.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery22.jpeg"><img data-filter="dessin" src=" <?php bloginfo("template_url")?>/img/gallery/gallery22.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery23.jpeg"><img data-filter="dessin" src=" <?php bloginfo("template_url")?>/img/gallery/gallery23.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery24.jpeg"><img data-filter="dessin" src=" <?php bloginfo("template_url")?>/img/gallery/gallery24.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery25.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery25.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery26.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery26.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery27.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery27.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery28.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery28.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery29.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery29.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery30.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery30.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery31.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery31.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery32.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery32.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery33.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery33.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery34.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery34.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery35.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery35.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery36.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery36.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery37.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery37.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery38.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery38.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery39.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery39.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery40.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery40.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery41.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery41.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery42.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery42.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery43.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery43.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery44.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery44.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery45.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery45.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery46.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery46.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery47.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery47.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery48.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery48.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery49.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery49.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery50.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery50.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery51.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery51.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery52.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery52.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery53.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery53.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery54.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery54.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery55.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery55.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery56.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery56.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery57.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery57.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery58.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery58.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery59.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery59.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery60.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery60.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery61.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery61.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery62.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery62.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery63.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery63.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery64.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery64.jpeg" alt=""></a>
                <a href=" <?php bloginfo("template_url")?>/img/gallery/gallery65.jpeg"><img data-filter="toile" src=" <?php bloginfo("template_url")?>/img/gallery/gallery65.jpeg" alt=""></a>
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
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/motard1.jpg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/art1.jpeg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/projet1.jpeg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/projet2.jpeg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/art2.jpeg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/gallery4.jpeg" alt=""></a>
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