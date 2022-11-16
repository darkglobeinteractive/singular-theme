<?php
function singular_register_block_patterns() {

  /* REGISTER BLOCK PATTERN CATEGORIES -------------------------- */
  register_block_pattern_category(
    'all',
    array(
      'label' => 'All Patterns'
    )
  );


  /* BASIC CONTENT WRAPPER -------------------------------------- */
  register_block_pattern(
    'singular-plugin/base-wrapper',
    array(
      'title'       => 'Basic Content Wrapper',
      'categories'  => array( 'all' ),
      'keywords'    => array( 'wrapper' ),
      'description' => 'Use this pattern to begin all page-based content blocks',
      'content'     => "<!-- wp:group -->
      <div class=\"wp-block-group singular-group\"></div>
      <!-- /wp:group -->"
    )
  );

}
add_action( 'init', 'singular_register_block_patterns' );
?>
