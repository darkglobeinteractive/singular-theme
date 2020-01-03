<!-- search.php // Search Results Page -->
<?php get_header(); ?>

  <div id="content">

    <?php get_search_form(); ?>

    <?php if ( have_posts() ) : ?>

      <div id="search-results">

      <?php while ( have_posts() ) : the_post(); ?>

        <div class="search-result">

          <?php if ( get_the_title() ): ?>
            <div class="title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></div>
          <?php endif; ?>

          <div class="blurb"><?php
            $excerpt = get_the_excerpt();
            $excerpt = substr( $excerpt, 0, 260);
            $result = substr( $excerpt, 0, strrpos( $excerpt, ' ') );
            echo $result.'...';
          ?></div>

          <div class="more"><a href="<?php echo get_the_permalink(); ?>">More</a></div>

        </div>

      <?php endwhile; ?>

      </div>

      <?php include( locate_template( 'templates/pagination.php', false, false ) ); ?>

    <?php else: ?>

      <p>Your search criteria returned no results. Please, try again.</p>

    <?php endif; ?>

  </div>

<?php get_footer(); ?>
