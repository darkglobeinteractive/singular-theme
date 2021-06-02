<!-- index.php // Posts Listing Page -->
<?php get_header(); ?>

<div id="content">

  <?php
  // Displaying the actual page content
  global $post;
  $page_for_posts_id = get_option('page_for_posts');
  if ( $page_for_posts_id ) :
    $post = get_page($page_for_posts_id);
    setup_postdata($post);
    ?>
      <h1><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
    <?php
    rewind_posts();
  endif;
  ?>

  <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
    'post_type' => 'post' ,
    'posts_per_page' => 3,
    'paged'=>$paged
  );
  $query = new WP_Query( $args );
  ?>
  <?php if ( $query->have_posts() ) : ?>

    <div class="blog-list">

    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

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

    <?php endwhile; ?>

    </div>

    <?php $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages; ?>
    <?php include( locate_template( 'templates/pagination.php', false, false ) ); ?>


  <?php else: ?>
    <p>We cannot find the content you are looking for. Please, try again.</p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
