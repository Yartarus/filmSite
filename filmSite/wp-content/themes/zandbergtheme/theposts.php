<article class="post">
  <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
  <?php if(get_post_type( $post_id ) != 'movies' ) : ?>
    <p class="post-meta"><?php the_time( 'Y-m-d' ); ?> | <a
      href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
      | <?php
      $categories = get_the_category();
      $comma      = ', ';
      $output     = '';

      if ( $categories ) {
        foreach ( $categories as $category ) {
          $output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
        }
        echo trim( $output, $comma );
      } ?>
    </p>
    <?php if ( has_post_thumbnail() ) { ?>
      <div class="small-thumbnail">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>
      </div>
    <?php } ?>
  <?php else : ?>
    <?php if ( has_post_thumbnail() ) { ?>
      <div class="small-thumbnail">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'movie-cover' ); ?></a>
      </div>
    <?php } ?>
  <?php endif; ?>
  <p>
    <?php echo excerpt(40) ?>
    <a href="<?php the_permalink() ?>">Lees meer &raquo</a>
  </p>
</article>
