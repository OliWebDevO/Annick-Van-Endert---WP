        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                    $loop = new WP_Query( array( 
                        'post_type' => 'slider', // Va rechercher le type de contenu “job”
                        'posts_per_page' => -1, // Affiche tout sans limite 
                        'order' => 'ASC', // Chronologique ou pas (DESC)
                            ));?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!-- Ce qui doit être "bouclé" -->
                    <div class="swiper-slide hero" style="background:url(<?php the_post_thumbnail_url(); ?>) top / cover">
                        <div class="h-box-text">
                            <h3 class="h3">// <?php the_field('sous_titre'); ?> </h3>
                            <h1><?php the_title(); ?></h1>
                            <div class="h-p">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_query();
                    ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"><div class="triangle"></div></div>
            
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev swiper-button-orange"></div>
            <div class="swiper-button-next swiper-button-orange"></div>
        
            <!-- forme sur la pagination -->
            <!-- <div class="triangle"></div> -->
        </div>
    </header>