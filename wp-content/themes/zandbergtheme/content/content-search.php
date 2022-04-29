<?php if ( have_posts() ) {

  ?>
  <h2>Zoekresultaten voor: "<?php the_search_query(); ?>"</h2>
  <?php

  while ( have_posts() ) {
    the_post();
    get_template_part( 'theposts', get_post_format() );
  }

} else {
  echo '<p>No search results found!</p>';
}
?>
