<?php if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    get_template_part( 'theposts', get_post_format() );
  }
} else {
  echo '<p>There are no posts!</p>';
}
?>
