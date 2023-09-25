<?php
/* INCLUDES ----------------------------------------------------- */
include( 'inc/singular-child-functions.php' );


/* STYLES ------------------------------------------------------- */
function singchild_enqueue_style() {

	wp_enqueue_style( 'singchild-style', get_stylesheet_directory_uri().'/style.css', array(), singular_child_theme_filemtime( '/style.css' ) );
  wp_enqueue_style( 'singchild-style-responsive', get_stylesheet_directory_uri().'/style-responsive.css', array(), singular_child_theme_filemtime( '/style-responsive.css' ) );

}
add_action( 'wp_enqueue_scripts', 'singchild_enqueue_style', 99 );