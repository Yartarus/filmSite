<?php

get_header();

get_template_part( 'content/content-base', null, array(
  'content-slug' => 'content/content-single'
) );

get_footer();

?>
