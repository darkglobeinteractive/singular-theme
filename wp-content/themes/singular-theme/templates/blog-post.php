<?php
$permalink = get_permalink();
if ( has_post_thumbnail() ) {
  $post_thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
  $post_thumbnail_id = get_post_thumbnail_id();
  $post_thumbnail_alt = ( get_post_meta ( $post_thumbnail_id, '_wp_attachment_image_alt', true ) ?: 'Thumbnail image for: '.get_the_title() );
} else {
  $post_thumbnail = get_template_directory_uri().'/img/default-blog-thumbnail.jpg';
  $post_thumbnail_alt = 'Thumbnail image for: '.get_the_title();
}

$blurb = ( has_excerpt() ? get_the_excerpt() : substr( get_the_excerpt(), 0, 250 ).'[...]' );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="thumbnail"><a href="<?php echo $permalink; ?>"><img src="<?php echo $post_thumbnail; ?>" alt="<?php echo $post_thumbnail_alt; ?>" /></a></div>

  <div class="content">

    <h2><a href="<?php echo $permalink; ?>"><?php echo get_the_title(); ?></a></h2>

    <?php
    $categories = get_the_category();
    if (!empty($categories)) {
      echo '<div class="blog-taxonomy categories"><strong>Categories:</strong> ';
      foreach($categories as $category) {
        echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
      }
      echo '</div>';
    }
    ?>

    <?php
    $tags = get_the_tags();
    if (!empty($tags)) {
      echo '<div class="blog-taxonomy tags"><strong>Tags:</strong> ';
      foreach($tags as $tag) {
        echo '<a href="' . esc_url(get_category_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a>';
      }
      echo '</div>';
    }
    ?>

    <div class="blurb">
      <?php echo get_the_excerpt(); ?>
    </div>

    <div class="btn-wrap"><a href="<?php echo $permalink; ?>" class="btn">Read More</a></div>

  </div>

</article>
