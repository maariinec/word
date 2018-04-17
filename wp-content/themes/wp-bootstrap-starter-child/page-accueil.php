<?php
/**
* Template Name: Accueil Template
**/

get_header(); ?>

    <section id="primary" class="content-area col-sm-12 col-lg-12">
        <main id="main" class="site-main row" role="main">

           <div class="container">
            <h1 class="text">Bienvenue au restaurant Le petit marseillais !</h1>
            <p class="text">Cadre élégant au cœur du Vieux-Port pour découvrir notre carte méditerranéenne
              ainsi que nos spécialités: la bouillabaisse, le plateau de fruits de mer, nos poissons grillés ou en croûte de sel... </p>
            </div>

        </main><!-- #main -->
    </section><!-- #primary -->

    <section class="mx-auto">
      <?php
          $query = new WP_Query( array('post_type' => 'plat-du-jour') );
          while ( $query->have_posts() ) : $query->the_post(); ?>
          <h1 class="text">Plat du Jour</h1>
          <div class="opacity">
            <div class="card">
            <div class="row">
              <div class="col-md-6">
                <div class="card-img-bottom">
                  <h3 class="card-title mx-auto"> <?php the_field('nom'); ?> </h3>
                  <img class="photo" src="<?php the_field('image'); ?>"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card-block">
                  <h4 class="card-text mx-auto"> <?php the_field('categorie'); ?></h4>
                  <p class="card-text mx-auto"> Prix : <?php the_field('prix'); ?></p>
                  <p class="card-text mx-auto"> <?php the_field('liste');?> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endwhile; ?>
    </section>
<?php
