<article class="post">
  <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
  <p class="post-meta">
    <?php the_terms( $movie->ID, 'genres', 'Genres: ', ', ', ' ' ); ?>
  </p>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="single-post-image">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'movie-cover' ); ?></a>
    </div>
  <?php } ?>
  <p>
    <?php echo excerpt(40) ?>
    <a href="<?php the_permalink() ?>">Lees meer &raquo</a>
  </p>
</article>
