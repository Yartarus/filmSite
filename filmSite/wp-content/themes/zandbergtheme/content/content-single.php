<?php if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); ?>

    <article class="post">
      <h2><?php the_title() ?></h2>
      <?php if ( has_post_thumbnail() ) { ?>
        <div class="single-post-image">
          <?php the_post_thumbnail( 'single-post-image' ); ?>
        </div>
      <?php } ?>
      <?php the_content() ?>
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
    </article>

    <?php
  }
} else {
  echo '<p>There are no posts!</p>';
}
?>
