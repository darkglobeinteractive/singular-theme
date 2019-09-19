<!-- page-sitemap.php // Site Map -->
<?php get_header(); ?>

  <div id="content">

    <div class="sitemap-listing">
      <ul>
          <?php
              $arg_pages = array(
                'exclude' => '69',
                'title_li' => '',
                // 'sort_column' => 'post_title,menu_order'
              );
              wp_list_pages( $arg_pages );
          ?>
      </ul>
    </div>

  </div>

<?php get_footer(); ?>
