<!-- category.php // Posts Category Archive List -->
<?php get_header(); ?>

<div id="content">

  <?php if ( have_posts() ) : ?>

    <div class="blog-list">

    <?php while ( have_posts() ) : the_post(); ?>
      <?php
      $permalink = get_permalink();
      $post_thumbnail = get_the_post_thumbnail_url( get_the_ID(), '');
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if ( $post_thumbnail ): ?>
          <div class="thumbnail"><a href="<?php echo $permalink; ?>"><img src="<?php echo $post_thumbnail; ?>" /></a></div>
        <?php endif; ?>

        <div class="content">

          <h2><a href="<?php echo $permalink; ?>"><?php echo get_the_title(); ?></a></h2>

          <?php
          $categories = get_the_category();
          if (!empty($categories)) {
            echo '<div class="blog-category">';
            foreach($categories as $category) {
              echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
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
    <?php endwhile; ?>

    </div>

    <?php include( locate_template( 'templates/pagination.php', false, false ) ); ?>

  <?php else: ?>
    <p>We cannot find the content you are looking for. Please, try again.</p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
