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
                <a href="<?php bloginfo("url")?>">
                    <h1>Annick</h1>
                </a>
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
                    <a href="<?php bloginfo("url")?>/contact"><i class="fa-solid fa-envelope text-primary"></i></a>
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
            <h2>News</h2>
        </div>
    </header>

    <!-- Start of page -->

    <div class="wrapper">
            <!-- News -->
                <div class="news-container">
                    <!-- News Column -->
                    <div class="news-main-container">
                        <div class="news_posts">
                            <!-- News Post -->
                            <div class="news_post">
                                <div class="news_post_image">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="news_post_top">
                                    <div class="news_post_date_container">
                                        <div class="news_post_date">
                                            <div class="date_day"><?php the_field('jour');?></div>
                                            <div><?php the_field('mois');?></div>
                                        </div>
                                    </div>
                                    <div class="news_post_title_container">
                                        <div class="news_post_title">
                                            <a href="<?php the_permalink()?>"><h2><?php the_title(); ?></h2></a>
                                        </div>
                                        <div class="news_post_meta">
                                            <span class="news_post_author"><a href="#"><?php the_category(' | ') ; ?></a></span>
                                            <!-- <span>|</span>
                                            <span class="news_post_comments"><a href="#">3 Comments</a></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="news_post_text">
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Page Nav -->

                        <!-- <div class="news_page_nav">
                            <ul>
                                <li class="active text-center trans_200"><a href="#">01</a></li>
                                <li class="text-center trans_200"><a href="#">02</a></li>
                                <li class="text-center trans_200"><a href="#">03</a></li>
                            </ul>
                        </div> -->

                    </div>

                     <!-- Sidebar -->

                     <div class="news-side-container">
                            <!-- Archive -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>NEWS // Catégories</h3>
                                </div>
                                <?php
                                $categories = get_categories( array(
                                    'orderby' => 'name',
                                    'order'   => 'ASC'
                                ) );

                                foreach( $categories as $category ) {
                                echo '<ul class="sidebar_list">
                                    <li class="sidebar_list_item">
                                        <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>
                                   
                                </ul>';   
                                } 
                                ?>
                            </div>

                            <!-- Artists Posts -->

                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>NEWS // Annick</h3>
                                </div>
                                
                                <div class="latest_posts">
                                    <!-- Loop PHP Debut-->
                                    <?php
                                    $loop = new WP_Query( array( 
                                        'post_type' => 'news', // Va rechercher le type de contenu “job”
                                        'category_name' => 'annick', // Va rechercher le type de contenu “job”
                                        'posts_per_page' => 5, // Affiche tout sans limite
                                        'order' => 'ASC', // Chronologique ou pas (DESC)
                                            ));?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <!-- Ce qui doit être "bouclé" -->

                                    <!-- Latest Post -->
                                    <div class="latest_post">
                                        <div class="latest_post_image">
                                            <img class="latest_post_image" src="<?php the_post_thumbnail_url(); ?>">
                                        </div>
                                        <div class="latest_post_title">
                                            <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="latest_post_meta">
                                            <span class="latest_post_author">
                                                <a href="#"><?php the_category(' | ') ; ?></a>
                                            </span>
                                        </div>
                                    </div>
                                     <?php endwhile;
                                    wp_reset_query();
                                    ?>
                                    <!-- Loop PHP Fin-->             
                                </div>
                                    
                            </div>

                            <!-- General News Posts -->

                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>NEWS // Général</h3>
                                </div>
                                <div class="latest_posts">
                                    
                                     <!-- Loop PHP Debut-->
                                     <?php
                                    $loop = new WP_Query( array( 
                                        'post_type' => 'news', // Va rechercher le type de contenu “job”
                                        'category_name' => 'general', // Va rechercher le type de contenu “job”
                                        'posts_per_page' => 5, // Affiche tout sans limite
                                        'order' => 'ASC', // Chronologique ou pas (DESC)
                                            ));?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <!-- Ce qui doit être "bouclé" -->

                                    <!-- Latest Post -->
                                    <div class="latest_post">
                                        <div class="latest_post_image">
                                            <img class="latest_post_image" src="<?php the_post_thumbnail_url(); ?>">
                                        </div>
                                        <div class="latest_post_title">
                                            <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="latest_post_meta">
                                            <span class="latest_post_author">
                                                <a href="#"><?php the_category(' | ') ; ?></a>
                                            </span>
                                        </div>
                                    </div>
                                     <?php endwhile;
                                    wp_reset_query();
                                    ?>
                                    <!-- Loop PHP Fin-->                                                              
                                </div>
                                    
                            </div>
                            <!-- Tags -->

                        <!--<div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="tags d-flex flex-row flex-wrap">
                                    <div class="tag"><a href="#">Course</a></div>
                                    <div class="tag"><a href="#">Design</a></div>
                                    <div class="tag"><a href="#">FAQ</a></div>
                                    <div class="tag"><a href="#">Teachers</a></div>
                                    <div class="tag"><a href="#">School</a></div>
                                    <div class="tag"><a href="#">Graduate</a></div>
                                </div>
                            </div> -->
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