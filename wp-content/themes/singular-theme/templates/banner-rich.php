<?php
// Grab global variables from custom function.php function
$gv = singular_global_vars();
$qo = $gv['queried_object'];
$qid = $qo->ID;

// Create arrays for banner classes and styles
$classes_array = array( 'banner-rich' );
$styles_array = array();
$btn_array = array( 'btn' );

// Handle banner and button classes based-on type of banner, defaulting to 'full'
$rich_banner_type = ( get_field( 'rich_banner_type', $qid ) ?: 'full' );

// Set banner mask to 'false' by default
$rich_banner_mask = false;

// Full width banners have background images on the banner element and transparent buttons
if ( $rich_banner_type == 'full' ) {

  // Add full class to array
  $classes_array[] = 'full';

  // Determine the full background type, defaulting to a static image
  $rich_banner_background_type = ( get_field( 'rich_banner_background_type', $qid ) ?: 'static-image' );

  // Add full background type to classes array
  $classes_array[] = $rich_banner_background_type;

  // Check for a video background
  if ( $rich_banner_background_type == 'video' ) {
    $rich_banner_video = ( get_field( 'rich_banner_video', $qid ) ?: false );
  }

  // Set banner mask
  $rich_banner_mask = ( get_field( 'rich_banner_mask', $qid ) == 'Yes' ? true : false );

} else {

  // Other wise it's an 'image-aligned' banner and either 'image-left' or 'image-right'
  array_push( $classes_array, 'image-aligned', $rich_banner_type );

}

// Handle banner image
$rich_banner_image = ( get_field( 'rich_banner_image', $qid ) ?: false );
if ( $rich_banner_image ) {
  $styles_array[] = 'background-image: url('.$rich_banner_image['sizes']['large'].')';
}

// Handle background position, defaulting to 'center center'
$rich_banner_background_position = ( get_field( 'rich_banner_background_position', $qid ) ?: 'center center' );

// Add background position to the styles array
$styles_array[] = 'background-position: '.$rich_banner_background_position;

// Create classes and styles code
$block_classes = ' class="'.implode( ' ', $classes_array ).'"';
$block_styles = ' style="'.implode( '; ', $styles_array ).'"';
$btn_classes = implode( ' ', $btn_array );

// Handle banner text and button
$rich_banner_text = ( get_field( 'rich_banner_text', $qid ) ?: false );
$rich_banner_button = ( get_field( 'rich_banner_button', $qid ) ? singular_assemble_link( get_field( 'rich_banner_button' ), $btn_classes ) : false );
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
  <?php if ( $rich_banner_type == 'full' && $rich_banner_background_type == 'video' && $rich_banner_video ): ?>
    <video class="video-bg <?php echo $rich_banner_background_position; ?>" autoplay loop muted width="100%">
      <source src="<?php echo $rich_banner_video['url']; ?>" type="video/mp4" />
    </video> 
  <?php endif; ?>
  <?php if ( $rich_banner_mask ): ?>
    <div class="mask"></div>
  <?php endif; ?>
</div>