<?php
/* INCLUDES ----------------------------------------------------- */
/* Un-comment the ones you'd like to use, each contains examples */
// include( 'inc/wysiwyg-customizations.php' );
// include( 'inc/shortcodes.php' );
// include( 'inc/singular-functions.php' );

/* ENABLE THEME SUPPORT ----------------------------------------- */
function singular_setup_theme_supported_features() {
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );
  // add_theme_support( 'responsive-embeds' );
  add_theme_support( 'editor-styles' );
  add_editor_style( 'style-editor.css' );
}
add_action( 'after_setup_theme', 'singular_setup_theme_supported_features' );



/* STYLES ------------------------------------------------------- */
function singular_styles() {
  wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap', false );
  // wp_enqueue_style( 'custom-fontastic-icons', 'https://file.myfontastic.com/U9FqFSWAktJNmqp9Dd93ZG/icons.css', false );
  // wp_enqueue_style( 'local-fontastic-icons', get_template_directory_uri().'/fonts/styles.css' );
  // wp_enqueue_style( 'colorbox_css', get_template_directory_uri().'/libs/colorbox/example2/colorbox.css' );
  // wp_enqueue_style( 'slickjs_css', get_template_directory_uri().'/libs/slick/slick/slick.css' );
  // wp_enqueue_style( 'slickjs_theme_css', get_template_directory_uri().'/libs/slick/slick/slick-theme.css' );
  // wp_enqueue_style( 'slickjs_custom_css', get_template_directory_uri().'/css/slick-customizations.css' );
  wp_enqueue_style( 'mmenu_css', get_template_directory_uri().'/libs/mmenu/dist/jquery.mmenu.all.css' );
  wp_enqueue_style( 'global_css', get_template_directory_uri().'/style.css' );
  wp_enqueue_style( 'wordpress_core_css', get_template_directory_uri().'/css/wordpress-core.css' );
  wp_enqueue_style( 'responsive_css', get_template_directory_uri().'/style-responsive.css' );
  wp_enqueue_style( 'menus_css', get_template_directory_uri().'/style-menus.css' );
  wp_enqueue_style( 'homepage_css', get_template_directory_uri().'/style-homepage.css' );
}
add_action( 'wp_enqueue_scripts', 'singular_styles' );


/* LOGIN PAGE UPDATES ------------------------------------------- */
function singular_login_css() {
  wp_enqueue_style( 'login-styles', get_template_directory_uri() . '/css/login.css');
}
add_action( 'login_enqueue_scripts', 'singular_login_css' );

function singular_login_url() {
  return '/';
}
add_filter( 'login_headerurl', 'singular_login_url' );


/* SCRIPTS ------------------------------------------------------ */
function singular_scripts() {
  // wp_enqueue_script( 'colorbox_js', get_template_directory_uri().'/libs/colorbox/jquery.colorbox-min.js', array( 'jquery' ) );
  // wp_enqueue_script( 'slickjs_js', get_template_directory_uri().'/libs/slick/slick/slick.js', array( 'jquery' ) );
  wp_enqueue_script( 'mmenu_js', get_template_directory_uri().'/libs/mmenu/dist/jquery.mmenu.all.js', array( 'jquery' ) );
	wp_enqueue_script( 'global_js', get_template_directory_uri().'/js/global.js', array( 'jquery', 'mmenu_js' ) );
}
add_action( 'wp_enqueue_scripts', 'singular_scripts' );


/* GLOBALLY SHARED VARIABLES ------------------------------------ */
function singular_global_vars() {
  static $global_vars = NULL;
  if ( empty( $global_vars ) ) {
    $global_vars = array( 'queried_object' => get_queried_object() );
  }
  return $global_vars;
}
add_action( 'template_redirect', 'singular_global_vars' );


/* INITIATE WIDGETS/SIDEBAR ------------------------------------- */
function singular_widgets_init() {
  register_sidebar( array (
    'name' => 'Primary Sidebar',
    'id' => 'primary',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
  ) );
}
add_action( 'widgets_init', 'singular_widgets_init' );


/* WP CORE CUSTOM FIELDS ---------------------------------------- */
/* Un-comment the following line if you need to use WordPress core "Custom Fields" */
/* The "Advanced Custom Themes" plugin hides the option by default */
// add_filter('acf/settings/remove_wp_meta_box', '__return_false');

?>
