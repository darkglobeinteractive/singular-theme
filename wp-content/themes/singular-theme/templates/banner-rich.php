<?php
// Grab global variables from custom function.php function
$gv = singular_global_vars();
$qo = $gv['queried_object'];
$qid = $qo->ID;

// Create arrays for banner classes and styles
$classes_array = array( 'banner-rich' );
$styles_array = array();
$btn_array = array( 'btn' );

// Handle banner and button classes based-on type of banner
$rich_banner_type = ( get_field( 'rich_banner_type', $qid ) ?: '' );

// Full width banners have background images on the banner element and transparent buttons
if ( $rich_banner_type == 'full' ) {

  // Add full class to array
  $classes_array[] = 'full';

} else {

  // Other wise it's an image-aligned banner and either image-left/image-right
  array_push( $classes_array, 'image-aligned', $rich_banner_type );

}

// Handle banner image
$rich_banner_image = ( get_field( 'rich_banner_image', $qid ) ?: '' );
if ( $rich_banner_image ) {
  $styles_array[] = 'background-image: url('.$rich_banner_image['sizes']['large'].')';
}

// Handle background image position
$rich_banner_image_position = ( get_field( 'rich_banner_image_position', $qid ) ?: 'center center' );
$styles_array[] = 'background-position: '.$rich_banner_image_position;

// Handle styles and classes
$block_classes = ' class="'.implode( ' ', $classes_array ).'"';
$block_styles = ' style="'.implode( '; ', $styles_array ).'"';
$btn_classes = implode( ' ', $btn_array );

// Handle banner text and button
$rich_banner_text = ( get_field( 'rich_banner_text', $qid ) ?: '' );
$rich_banner_button = ( get_field( 'rich_banner_button', $qid ) ? singular_assemble_link( get_field( 'rich_banner_button' ), $btn_classes ) : '' );
?>
<div id="banner-rich"<?php echo $block_classes; ?><?php echo ( $rich_banner_type == 'full' ? $block_styles : '' ); ?>>
  <div class="wrap">
    <div class="content<?php if ( $rich_banner_type != 'full' ): ?> has-primary-background-color<?php endif; ?>">
      <div class="content-wrap">
        <?php echo $rich_banner_text; ?>
        <?php if ( $rich_banner_button ): ?>
          <div class="button-wrap">
            <?php echo $rich_banner_button; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php if ( $rich_banner_type != 'full' ): ?>
      <div class="image"<?php echo $block_styles; ?>></div>
    <?php endif; ?>
  </div>
</div>