<?php
/* INCLUDES ----------------------------------------------------- */
include( 'inc/singular-child-functions.php' );

/* ENABLE THEME SUPPORT ----------------------------------------- */
/* https://developer.wordpress.org/reference/functions/add_theme_support/ */
function singchild_setup_theme_supported_features() {
  add_theme_support( 'editor-color-palette', array(
    array(
      'name'  => 'Brand Primary',
      'slug'  => 'brand-primary',
      'color' => '#005133'
    ),
    array(
      'name'  => 'Brand Secondary',
      'slug'  => 'brand-secondary',
      'color' => '#ffd600'
    ),
    array(
      'name'  => 'Brand Grey',
      'slug'  => 'brand-grey',
      'color' => '#f0f1f1'
    ),
    array(
      'name'  => 'Black',
      'slug'  => 'black',
      'color' => '#000000'
    ),
    array(
      'name'  => 'White',
      'slug'  => 'white',
      'color' => '#ffffff'
    ),
  ) );
}
add_action( 'after_setup_theme', 'singchild_setup_theme_supported_features', 30 );

/* STYLES ------------------------------------------------------- */
function singchild_enqueue_style() {

	wp_enqueue_style( 'singchild-style', get_stylesheet_directory_uri().'/style.css', array(), singular_child_theme_filemtime( '/style.css' ) );
  wp_enqueue_style( 'singchild-style-responsive', get_stylesheet_directory_uri().'/style-responsive.css', array(), singular_child_theme_filemtime( '/style-responsive.css' ) );

}
add_action( 'wp_enqueue_scripts', 'singchild_enqueue_style', 99 );

/* ADMIN STYLES ------------------------------------------------- */
function singchild_admin_styles() {
  wp_enqueue_style( 'admin-style-css', get_stylesheet_directory_uri().'/style.css', array(), singular_child_theme_filemtime('/style.css' ) );
}
add_action( 'admin_enqueue_scripts', 'singchild_admin_styles', 99 );

/* LOGIN LOGO STYLES -------------------------------------------- */
function singchild_login_css() {
  wp_enqueue_style( 'login-css', get_stylesheet_directory_uri().'/css/login.css', array(), singular_child_theme_filemtime('/css/login.css' ) );
}
add_action( 'login_enqueue_scripts', 'singchild_login_css' );