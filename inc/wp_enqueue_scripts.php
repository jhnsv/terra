<?php
/**
 * Enqueue scripts and styles.
 */
function theme_scripts() {
	// Add custom fonts, used in the main stylesheet.
	//wp_enqueue_style( 'twentyseventeen-fonts', twentyseventeen_fonts_url(), array(), null );

	// Theme stylesheet.
	//wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
  wp_enqueue_style( 'theme-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700', null, '1.0' );
  wp_enqueue_style( 'normalize', get_theme_file_uri( '/assets/css/normalize.css' ), null, '7.0.0' );
  wp_enqueue_style( 'slick-slider', get_theme_file_uri( '/assets/css/slick.css' ), null, '1.6.0' );
  wp_enqueue_style( 'theme-style', get_theme_file_uri( '/assets/css/style.css' ), null, '1.0' );

  


//wp_style_add_data

  wp_enqueue_script( 'slick-slider', get_theme_file_uri( '/assets/js/slick.min.js' ), array( 'jquery' ), '1.6.0', true );
  wp_enqueue_script( 'app', get_theme_file_uri( '/assets/js/app.js' ), array( 'jquery' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );