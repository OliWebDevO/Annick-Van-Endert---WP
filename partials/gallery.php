<section>
            <div class="two">
                <!-- Loop PHP Debut-->
                <?php
                $loop = new WP_Query( array( 
                    'post_type' => 'accueil-galerie', // Va rechercher le type de contenu “job”
                    'posts_per_page' => -1, // Affiche tout sans limite 
                    'order' => 'ASC', // Chronologique ou pas (DESC)
                        ));?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <!-- Ce qui doit être "bouclé" -->
                <a href="<?php bloginfo("url")?>/gallery">
                    <div class="two-img-box wow animate__fadeInUp" data-wow-delay="<?php the_field('animation_delay');?>">
                        <?php the_post_thumbnail();?>
                        <div class="two-text">
                            <div class="two-title">
                                <a href=""><?php the_title(); ?></a>
                            </div>
                            <div class="two-fade">
                                <a href="<?php bloginfo("url")?>/gallery"><i class="fa-solid fa-paintbrush"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endwhile;
                wp_reset_query();
                ?>
            </div>
        </section>