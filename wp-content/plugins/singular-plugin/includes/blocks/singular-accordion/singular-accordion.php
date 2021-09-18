<?php
// Register the block
function singular_accordion_acf_init() {
  if ( function_exists( 'acf_register_block_type' ) ) {
    // https://www.advancedcustomfields.com/resources/acf_register_block_type/
    acf_register_block_type(
      array(
        'name' => 'singular-accordion',
        'title' => __( 'Accordion' ),
        'description' => __( 'A custom accordion repeater block' ),
        'render_callback' => 'singular_acf_block_render_callback',
        'category' => 'singular-blocks',
        'icon' => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 144 144" style="enable-background:new 0 0 144 144;" xml:space="preserve"><style type="text/css">.st0{fill:#FFFFFF;stroke:#000000;stroke-width:12;stroke-miterlimit:10;}.st1{fill:none;stroke:#000000;stroke-width:12;stroke-miterlimit:10;}</style><line class="st0" x1="19.6" y1="72" x2="124.4" y2="72"/><polyline class="st1" points="119.8,57.2 72.2,9.6 24.6,57.2 "/><polyline class="st1" points="24.5,86.8 72.1,134.4 119.7,86.8 "/></svg>',
        'keywords' => array( 'accordion' )
      )
    );
  }
}
add_action( 'acf/init', 'singular_accordion_acf_init' );

// Enqueue front-end styles for this block type
function singular_accordion_styles() {
  wp_enqueue_style( 'singular_accordion_css', plugin_dir_url( __FILE__ ).'styles.css' );
  wp_enqueue_script( 'singular_accordion_js', plugin_dir_url( __FILE__ ).'scripts.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'singular_accordion_styles' );


?>
