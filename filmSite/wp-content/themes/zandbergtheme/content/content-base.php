<?php if ( is_active_sidebar( 'rightsidebar' ) ) { ?>

  <div class="main-column"><!-- main-column -->

    <?php if ( $args['content-slug'] ) {
      get_template_part( $args['content-slug'] );
    } else {
      get_template_part( 'content/content-index' );
    } ?>

  </div><!-- main-column -->
  <div class="sidebar-column"><!-- sidebar-column -->
    <div class="widget-area">

      <?php dynamic_sidebar( 'rightsidebar' ) ?>

    </div>
  </div><!-- sidebar-column -->

<?php } else {

  if ( $args['content-slug'] ) {
    get_template_part( $args['content-slug'] );
  } else {
    get_template_part( 'content/content-index' );
  }

}

?>
