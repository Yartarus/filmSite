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
