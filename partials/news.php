<section class="four">
            <div class="s1-container">
                                <!-- Loop PHP Debut-->
                                <?php
                $loop = new WP_Query( array( 
                    'post_type' => 'accueil-section', // Va rechercher le type de contenu “job”
                    'posts_per_page' => 1, // Affiche tout sans limite
                    'offset' => 2, // Commence la boucle après avoir "passé" les 3 premiers
                    'order' => 'ASC', // Chronologique ou pas (DESC)
                        ));?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <!-- Ce qui doit être "bouclé" -->
                <div class="s1-imgs wow animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="s1-img1">
                        <img src= "<?php the_field('photo_gauche');?>" alt="">
                    </div>
                    <div class="s1-img2">
                        <img src= "<?php the_field('photo_droite');?>" alt="">
                    </div>
                    <div class="s1-form1">
                        
                    </div>
                    <div class="s1-form2">

                    </div>
                </div>
                <div class="s1-txt wow animate__fadeInUp" data-wow-delay="0.3s">
                    <h3 class="h3">
                    <?php the_title(); ?>
                    </h3>
                    <h2 class="h2">
                    <?php the_field('sous_titre');?>
                    </h2>
                    <p class="paragraph">
                    <?php the_excerpt(); ?>
                    </p>
                    <button class="btn-1">
                        <a href="<?php bloginfo("url")?>/about#annick">En savoir plus</a>
                    </button>
                </div>
                <?php endwhile;
                wp_reset_query();
                ?>
                <!-- Loop PHP Fin-->
            </div>
        </section>

        </div>