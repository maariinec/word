<?php
function my_theme_enqueue_styles() {
 wp_enqueue_style( 'wp-bootstrap-starter-aos', get_stylesheet_directory_uri() . '/vendor/aos.css' );
 wp_enqueue_style( 'parent-style',
   get_template_directory_uri() . '/style.css',
   wp_get_theme()->get('Version')
 );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

remove_action('welcome_panel', 'wp_welcome_panel');

// Creates Plats Custom Post Type
function plat_init() {
 $args = array(
   'label' => 'Plats',
     'public' => true,
     'show_ui' => true,
     'capability_type' => 'page',
     'hierarchical' => false,
     'rewrite' => array('slug' => 'plat'),
     'query_var' => true,
     'menu_icon' => 'dashicons-screenoptions',
     );
 register_post_type( 'plat', $args );
}
add_action( 'init', 'plat_init' );

// Creates Plat Du Jour Custom Post Type
function platDuJour_init() {
 $args = array(
   'label' => 'Plat Du Jour',
     'public' => true,
     'show_ui' => true,
     'capability_type' => 'page',
     'hierarchical' => false,
     'rewrite' => array('slug' => 'plat-du-jour'),
     'query_var' => true,
     'menu_icon' => 'dashicons-screenoptions',
     );
 register_post_type( 'plat-du-jour', $args );
}
add_action( 'init', 'platDuJour_init' );
