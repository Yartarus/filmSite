<?php if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); ?>

    <article class="page-layout">
      <nav class="child-navigation-menu children-links clearfix">
        <ul>
          <?php $args = [
            'child_of' => get_the_top_ancestor_id(),
            'title_li' => '',
          ]; ?>
          <?php wp_list_pages( $args ); ?>
        </ul>
      </nav>

      <h2><?php the_title() ?></h2>

      <?php the_content() ?>

    </article>

    <?php
  }
} else {
  echo '<p>There are no pages!</p>';
}
?>

<?php // Custom Loop using WP_Query to fetch Movie Posts

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$posts_per_page = 9;
$args = array(
  'post_type' => 'movies',
  'post_status' => 'publish',
  'order' => 'DESC',
  'orderby' => 'date',
  'posts_per_page' => $posts_per_page,
  'paged' => $paged
);
$moviePosts = new WP_Query( $args );

if ( $moviePosts->have_posts() ) {
  while ( $moviePosts->have_posts() ) {
    $moviePosts->the_post();

    get_template_part( 'themovies' );

  }

  if ($moviePosts->found_posts > $posts_per_page) { ?>
    <nav class="movie-pagination">
      <ul>
        <li class="previous"><?php previous_posts_link( '&laquo; Nieuwere', $moviePosts->max_num_pages) ?></li>
        <li class="next"><?php next_posts_link( 'Oudere &raquo;', $moviePosts->max_num_pages) ?></li>
      </ul>
    </nav>
  <?php }

} else {
  echo '<p>There are no posts!</p>';
}

wp_reset_postdata(); ?>
