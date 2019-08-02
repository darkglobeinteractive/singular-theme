<?php
/* INCLUDES ----------------------------------------------------- */
/* Un-comment the ones you'd like to use, each contains examples */
// include('inc/shortcodes.php');

/* ENABLE THEME SUPPORT ----------------------------------------- */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );


/* STYLES ------------------------------------------------------- */
function cst_styles() {
  wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,600,700', false );
  // wp_enqueue_style( 'custom-fontastic-icons', 'https://file.myfontastic.com/U9FqFSWAktJNmqp9Dd93ZG/icons.css', false );
  // wp_enqueue_style( 'local-fontastic-icons', get_template_directory_uri().'/fonts/styles.css' );
  // wp_enqueue_style( 'colorbox_css', get_template_directory_uri().'/libs/colorbox/example2/colorbox.css' );
  // wp_enqueue_style( 'slickjs_css', get_template_directory_uri().'/libs/slick-1.8.1/slick/slick.css' );
  // wp_enqueue_style( 'slickjs_theme_css', get_template_directory_uri().'/libs/slick-1.8.1/slick/slick-theme.css' );
  // wp_enqueue_style( 'mmenu_css', get_template_directory_uri().'/libs/jQuery.mmenu-master/dist/jquery.mmenu.all.css' );
  wp_enqueue_style( 'global_css', get_template_directory_uri().'/style.css' );
  wp_enqueue_style( 'responsive_css', get_template_directory_uri().'/style-responsive.css' );
  }
  add_action( 'wp_enqueue_scripts', 'cst_styles' );
}


/* SCRIPTS ------------------------------------------------------ */
function cst_scripts() {
  // wp_enqueue_script( 'slickjs_js', get_template_directory_uri().'/libs/slick-1.8.1/slick/slick.min.js', array( 'jquery' ) );
  // wp_enqueue_script( 'mmenu_js', get_template_directory_uri().'/libs/jQuery.mmenu-master/dist/jquery.mmenu.all.js', array( 'jquery' ) );
	wp_enqueue_script( 'global_js', get_template_directory_uri().'/js/global.js', array( 'jquery', 'slickjs_js' ) );
}
add_action( 'wp_enqueue_scripts', 'cst_scripts' );


/* WP CORE CUSTOM FIELDS ---------------------------------------- */
/* Un-comment the following line if you need to use WordPress core "Custom Fields" */
/* The "Advanced Custom Themes" plugin hides the option by default */
// add_filter('acf/settings/remove_wp_meta_box', '__return_false');

?>
