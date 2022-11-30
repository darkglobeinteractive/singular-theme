        <?php if ( is_active_sidebar( 'primary' ) ): ?>
          <?php get_sidebar( 'primary' ); ?>
        <?php endif; ?>
      </div>
    </div>
    <footer id="footer">
      <div class="wrap">
        <div class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo(); ?>, All Rights Reserved.</div>
        <?php include( locate_template( 'templates/social-media.php', false, false ) ); ?>
      </div>
    </footer>
  </div>
<?php wp_footer(); ?>
</body>
</html>
