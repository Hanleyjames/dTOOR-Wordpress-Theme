<?php
function whitecyrcle_enqueue_styles() {
  wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
  $dependencies = array('bootstrap');
  wp_enqueue_style( 'whitecyrcle-style', get_stylesheet_uri(), $dependencies );
}
function whitecyrcle_enqueue_scripts() {
  $dependencies = array('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '4.1.3', true);
}

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
add_action( 'wp_enqueue_scripts', 'whitecyrcle_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'whitecyrcle_enqueue_scripts' );
?>