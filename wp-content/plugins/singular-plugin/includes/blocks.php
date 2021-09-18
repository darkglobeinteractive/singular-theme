<?php
// Handle each custom block
function singular_plugin_acf_block_render_callback( $block ) {

    // This creates a string we can use from the ACF generated $block['name'] by removing 'acf/' and returning just the name
  	$slug = str_replace( 'acf/', '', $block['name'] );

  	// Include the block-code.php file from each respective block folder
  	if ( file_exists( plugin_dir_path( __FILE__ )."/blocks/{$slug}/block-code.php" ) ) {
  	   include( plugin_dir_path( __FILE__ )."/blocks/{$slug}/block-code.php" );
  	}

}

// Include each block type below
include( 'blocks/singular-accordion/singular-accordion.php' );

// Add the custom Singular Blocks category to the Gutenberg editor interface
function singular_plugin_block_category( $block_categories, $block_editor_context ) {
  return array_merge(
    $block_categories,
    array(
      array(
        'slug' => 'singular-blocks',
        'title' => esc_html__( 'Singular Blocks', 'text-domain' ),
        // 'icon' => 'wordpress',
      )
    )
  );
}
add_filter( 'block_categories_all', 'singular_plugin_block_category', 10, 2 );

// Enqueue admin styles for the blocks to handle how they're displayed in the editor
function singular_plugin_blocks_admin_scripts() {
  wp_enqueue_style( 'singular_plugin_blocks_admin_css', plugin_dir_url( __FILE__ ).'blocks/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'singular_plugin_blocks_admin_scripts' );
?>
