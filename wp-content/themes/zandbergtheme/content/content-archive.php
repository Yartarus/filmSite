<?php if ( have_posts() ) {

  ?>
  <h2>
    <?php
    if ( is_category() ) {
      single_cat_title( 'Categorie Archief: ' );
    } elseif ( is_tag() ) {
      single_tag_title( 'Tag Archief: ' );
    } elseif ( is_author() ) {
      the_post();
      echo 'Auteur Archief: ' . get_the_author();
      rewind_posts();
    } elseif ( is_day() ) {
      echo 'Dag Archief: ' . get_the_date();
    } elseif ( is_month() ) {
      echo 'Maand Archief: ' . get_the_date( 'F Y' );
    } elseif ( is_year() ) {
      echo 'Jaar Archief: ' . get_the_date( 'Y' );
    } else {
      echo 'Archief: ';
    }
    ?>
  </h2>
  <?php

  while ( have_posts() ) {
    the_post();
    get_template_part( 'theposts', get_post_format() );
  }

} else {
  echo '<p>There are no posts!</p>';
}
?>
