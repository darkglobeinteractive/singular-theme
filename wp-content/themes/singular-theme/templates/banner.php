<?php
// Grab global variables from custom function.php function
$gv = singular_global_vars();

// A Category ID indicates this is a category listing page
$cat_id = ( is_object( $gv['queried_object'] ) ? $gv['queried_object']->cat_ID : '' );

// Set default page title
$banner_title = wp_title( '', false );

// Customize page title when necessary
// Is this the search results page
if ( is_search() ) {
  $banner_title = 'Search Results';
// Blog category listing pages
} elseif ( is_int( $cat_id ) ) {
  $banner_title = 'Blog: '.$gv['queried_object']->name;
// All blog posts have the same title
} elseif ( get_post_type() === 'post' ) {
  $banner_title = 'Blog';
// Override title if Custom Fields custom_page_title exists
} elseif ( get_field( 'custom_page_title', $gv['queried_object'] ) ) {
  $banner_title = get_field( 'custom_page_title', $gv['queried_object'] );
}

// Build the title element
$banner_element = ( get_post_type() === 'post' ? '<div class="banner-title">' : '<h1 class="banner-title">' );
$banner_element .= $banner_title;
$banner_element .= ( get_post_type() === 'post' ? '</div>' : '</h1>' );
?>
<div id="banner">
  <div class="content">
    <?php echo $banner_element; ?>
  </div>
</div>
