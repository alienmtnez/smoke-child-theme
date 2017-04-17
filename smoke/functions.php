<?php

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' );

function my_enqueue_assets() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Custom scripts
function add_theme_scripts() {
  wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/smoke.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
