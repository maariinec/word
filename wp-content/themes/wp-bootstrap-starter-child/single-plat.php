<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8 mx-auto">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="opacity">
		    	<div class="card">
		      <div class="row">
						<div class="col-md-6">
		          <div class="card-img-bottom">
								<h3 class="card-title"> <?php the_field('nom'); ?> </h3>
								<img class="photo" src="<?php the_field('image'); ?>"/>
		          </div>
		        </div>
		        <div class="col-md-6">
		          <div class="card-block">
								<h4 class="card-text"> <?php the_field('categorie'); ?></h4>
								<p class="card-text"> <U>Prix :</U> <?php the_field('prix'); ?></p>
								<p class="card-text"><U>Ingrédients : </U></p>
								<p class="card-text"> <?php the_field('liste');?> </p>
		          </div>
		        </div>

		      </div>
		    </div>
		  </div>
		</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
