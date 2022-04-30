<?php if ( have_posts() ) {

  ?>
  <h2>
    <?php echo single_term_title(); ?>
    films:
  </h2>
  <?php

  while ( have_posts() ) {
    the_post();
    get_template_part( 'themovies' );
  }

} else {
  echo '<p>There are no posts!</p>';
}
?>
