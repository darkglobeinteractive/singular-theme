<?php // Admin View ?>
<?php if ( is_admin() ): ?>

  <?php if ( have_rows( 'accordion_row' ) ): ?>
    <div class="singular-admin-block accordion">
      <?php while ( have_rows( 'accordion_row' ) ): the_row(); ?>
        <div class="singular-admin-item">
          <div class="header">Accordion Row #<?php echo get_row_index(); ?></div>
          <div class="title"><strong>Title:</strong> <?php echo get_sub_field( 'title' ); ?></div>
          <div class="content"><?php echo get_sub_field( 'content' ); ?></div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>

<?php // Front-End View ?>
<?php else: ?>

  <?php if ( have_rows( 'accordion_row' ) ): ?>
    <div class="singular-accordion">
      <div class="singular-accordion-wrap">
        <?php while ( have_rows( 'accordion_row' ) ): the_row(); ?>
          <div class="item">
            <div class="title">
              <button class="wrap">
                <?php echo get_sub_field( 'title' ); ?>
              </button>
              <button class="trigger">Toggle Item</button>
            </div>
            <div class="content">
              <div class="wrap">
                <?php echo get_sub_field( 'content' ); ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

<?php endif; ?>
