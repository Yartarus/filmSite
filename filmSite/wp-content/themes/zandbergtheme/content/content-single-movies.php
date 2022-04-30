<?php if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); ?>

    <article class="post">
      <h2><?php the_title() ?></h2>
      <?php if ( has_post_thumbnail() ) { ?>
        <div class="single-post-image cancel-float-mobile">
          <?php the_post_thumbnail( 'movie-cover-large' ); ?>
        </div>
      <?php } ?>
      <?php the_content() ?>
      <p class="movie-genres">
        <?php the_terms( $movie->ID, 'genres', 'Genres: ', ', ', ' ' ); ?>
      </p>
    </article>

    <?php
  }
} else {
  echo '<p>There are no posts!</p>';
}
?>
