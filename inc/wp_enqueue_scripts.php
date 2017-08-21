<?php
/**
 * Enqueue scripts and styles.
 */
function theme_scripts() {
	// Add custom fonts, used in the main stylesheet.
	//wp_enqueue_style( 'twentyseventeen-fonts', twentyseventeen_fonts_url(), array(), null );

	// Theme stylesheet.
	//wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
  wp_enqueue_style( 'theme-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans', null, '1.0' );
  wp_enqueue_style( 'theme-style', get_theme_file_uri( '/assets/css/style.css' ), null, '1.0' );

  


//wp_style_add_data

//	wp_enqueue_script( 'twentyseventeen-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );