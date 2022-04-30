<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

function get_the_top_ancestor_id() {
	global $post;
	if ( $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
		return $ancestors[0];
	} else {
		return $post->ID;
	}
}

function initialize_widgets() {
	register_sidebar( [
		'name' => 'Right Sidebar',
		'id'   => 'rightsidebar',
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>'
	] );

	register_sidebar( [
		'name' => 'Footer',
		'id'   => 'footer',
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>'
	] );
}

add_action( 'widgets_init', 'initialize_widgets' );

/* Add Featured Image Support To Your WordPress Theme */
function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'small-thumbnail', 100, 100, true );
	add_image_size( 'single-post-image', 250, 250, true );
	add_image_size( 'movie-cover', 250, 300 );
	add_image_size( 'movie-cover-large', 300, 450 );
	add_theme_support( 'post-formats', [
		'aside',
		'gallery',
		'standard'
	] );
}

add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );

/* Gets the excerpt and trims it to a specified length */
function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
}
