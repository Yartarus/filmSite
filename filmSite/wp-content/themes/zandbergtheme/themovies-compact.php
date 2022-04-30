<article class="post">
  <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="small-thumbnail">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>
    </div>
  <?php } ?>
  <p>
    <?php echo excerpt(25) ?>
    <a href="<?php the_permalink() ?>">Lees meer &raquo</a>
  </p>
</article>
