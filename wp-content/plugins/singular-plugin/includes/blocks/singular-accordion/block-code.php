<?php if ( have_rows( 'accordion_row' ) ): ?>
  <?php while ( have_rows( 'accordion_row' ) ): the_row(); ?>
    <div class="singular-accordion">
      <div><?php echo get_sub_field( 'title' ); ?></div>
      <div><?php echo get_sub_field( 'content' ); ?></div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
