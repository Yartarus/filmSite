<footer class="site-footer">
  <?php if ( is_active_sidebar( 'footer' ) ) { ?>
    <div class="footer-widget widget-area"><!-- footer-widget -->
      <?php dynamic_sidebar( 'footer' ) ?>
    </div><!-- footer-widget -->
  <?php } ?>
  <p><?php bloginfo( 'name' ) ?> - Thierry Decker 2022</p>
</footer>
</div> <!-- closes <div class=container"> -->

  <?php wp_footer() ?>
</body>
</html>
