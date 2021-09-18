<?php
// Register the block
function singular_accordion_acf_init() {
  if ( function_exists( 'acf_register_block' ) ) {
    acf_register_block(
      array(
        'name' => 'singular-accordion',
        'title' => __( 'Accordion' ),
        'description' => __( 'A custom accordion repeater block' ),
        'render_callback' => 'singular_acf_block_render_callback',
        'category' => 'singular-blocks',
        'icon' => 'admin-comments',
        'keywords' => array( 'accordion' )
      )
    );
  }
}
add_action( 'acf/init', 'singular_accordion_acf_init' );

// Enqueue front-end styles for this block type
function singular_accordion_styles() {
  wp_enqueue_style( 'singular_accordion_css', plugin_dir_url( __FILE__ ).'styles.css' );
}
add_action( 'wp_enqueue_scripts', 'singular_accordion_styles' );


?>
