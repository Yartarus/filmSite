<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <header class="site-header">
      <div class="header-content">
        <div class="header-search">
          <?php get_search_form(); ?>
        </div>
        <?php if(is_front_page()) : ?>
          <h1><?php bloginfo( 'name' ); ?></h1>
        <?php else : ?>
          <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <?php endif ?>
        <h4><?php bloginfo( 'description' ); ?></h4>
      </div>
      <nav class="navigation-menu">
        <?php $args = [ 'theme_location' => 'primary' ]; ?>
        <?php wp_nav_menu( $args ) ?>
      </nav>
    </header>
