<?php

/* LOAD STYLE SHEET --------------------------------------------- */
function singular_support_styles( $hook ) {
  if ( $hook != 'toplevel_page_singular-support' && $hook != 'site-support_page_singular-support-sub-page' ) {
    return;
  }
  wp_enqueue_style( 'singular-support-css', get_template_directory_uri().'/admin-support/styles.css', array(), singular_theme_filemtime('/admin-support/styles.css' ) );
}
add_action( 'admin_enqueue_scripts', 'singular_support_styles' );


/* CREATE ADMIN MENU STRUCTURE ---------------------------------- */
function singular_support_menu() {
	add_menu_page( 
    'Site Support', // Page title
    'Site Support', // Title in menu bar
    'manage_options', // Capability required to access menu
    'singular-support', // Menu slug
    'singular_support_home', // Function handling content of page
    'dashicons-info', // Icon to use in admin sidebar
    2  
  );
  add_submenu_page(
    'singular-support',
    'Site Support',
    'Home',
    'manage_options',
    'singular-support'
  );
  add_submenu_page(
    'singular-support',
    'Site Support Sub-Page',
    'Site Support Sub-Page',
    'manage_options',
    'singular-support-sub-page',
    'singular_support_sub_page'
  );
}
add_action( 'admin_menu', 'singular_support_menu' );


/* CREATE PAGE CONTENT ------------------------------------------ */
function singular_support_home() { 
  include( 'pages/home.php' );
} 
function singular_support_sub_page() {
  include( 'pages/sub-page.php' );
} 
?>