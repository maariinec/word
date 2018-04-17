<?php
/**
* Template Name: Plat Template
**/

get_header(); ?>

    <section id="primary" class="content-area col-sm-12 col-lg-12">
        <main id="main" class="site-main row" role="main">

       <?php
           $query = new WP_Query( array('post_type' => 'plat') );
           while ( $query->have_posts() ) : $query->the_post(); ?>
           <div class="card" style="width: 18rem;">
					          <div class="card-body">
					            <a href="http://localhost:8888/wordpress/carte/<?php the_field('nom'); ?>" ><h5 class="card-title"><?php the_field('nom'); ?></h5></a>
					            <p class="card-text"><?php the_field('prix'); ?></p>
					          </div>
					 </div>
       <?php wp_reset_postdata(); ?>
       <?php endwhile; ?>
        </main><!-- #main -->
    </section><!-- #primary -->
<?php
