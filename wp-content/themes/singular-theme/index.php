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
        <?php include( locate_template( 'templates/blog-post.php', false, false ) ); ?>
      <?php endwhile; ?>

    </div>

    <?php $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages; ?>
    <?php include( locate_template( 'templates/pagination.php', false, false ) ); ?>


  <?php else: ?>
    <p>We cannot find the content you are looking for. Please, try again.</p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
