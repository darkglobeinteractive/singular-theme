<!-- single.php // Single Blog Post -->
<?php get_header(); ?>

  <div id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1 class="blog-post"><?php echo get_the_title(); ?></h1>

      <?php $featured_image = get_the_post_thumbnail_url( get_the_ID(), ''); ?>
      <?php if ( $featured_image ): ?>
        <?php
        // Create alt text for thumbnail
        $featured_image_id = get_post_thumbnail_id( get_the_ID() );
        $featured_image_alt = ( get_post_meta ( $featured_image_id, '_wp_attachment_image_alt', true ) ?: 'Thumbnail image for: '.get_the_title() );
        ?>
        <div class="featured-image"><img src="<?php echo $featured_image; ?>" alt="<?php echo $featured_image_alt; ?>" /></div>
      <?php endif; ?>

      <?php the_content(); ?>

    <?php endwhile; else: ?>
      <p>We cannot find the content you are looking for. Please, try again.</p>
    <?php endif; ?>

  </div>

<?php get_footer(); ?>
