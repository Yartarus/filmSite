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

      <?php the_content() ?>

    </article>

    <?php
  }
} else {
  echo '<p>There are no pages!</p>';
}
?>

<h3 class="spacing-top-40">Onze recentste films</h3>
<?php // Custom Loop using WP_Query to fetch Movie Posts

$args = array(
  'post_type' => 'movies',
  'post_status' => 'publish',
  'order' => 'DESC',
  'orderby' => 'date',
  'posts_per_page' => 5
);
$moviePosts = new WP_Query( $args );

if ( $moviePosts->have_posts() ) {
  while ( $moviePosts->have_posts() ) {
    $moviePosts->the_post();

    get_template_part( 'themovies-compact' );

  }
} else {
  echo '<p>There are no posts!</p>';
}

wp_reset_postdata(); ?>
