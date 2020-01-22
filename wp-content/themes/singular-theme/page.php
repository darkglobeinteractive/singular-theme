<!-- page.php // Single Page -->
<?php get_header(); ?>

  <div id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php if ( get_the_title() || get_field( 'custom_page_title' ) ): ?>
        <h1><?php echo ( get_field( 'custom_page_title' ) ? get_field( 'custom_page_title' ) : get_the_title() ); ?></h1>
      <?php endif; ?>

      <?php the_content(); ?>

    <?php endwhile; else: ?>
      <p>We cannot find the content you are looking for. Please, try again.</p>
    <?php endif; ?>

  </div>

<?php get_footer(); ?>
