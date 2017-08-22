<?php
/**
 * Remove emojis
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function theme_setup() {
  /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 */
	load_theme_textdomain( 'terra' );
	
}
add_action( 'after_setup_theme', 'theme_setup' );


/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );


/**
 * Add class to the_excerpt
 */
function add_class_to_excerpt( $excerpt ) {
  return str_replace('<p', '<p class="lead"', $excerpt);
}
add_action('the_excerpt','add_class_to_excerpt');