<?php
function create_post_types () {

  register_post_type('block', array(
		'labels' => array(
			'name' => 'Blocks',
			'singular_name' => 'Block'
		),
		'menu_icon' => 'dashicons-screenoptions',
		'public' => false,
		'show_ui' => true,
		'publicly_queryable' => false,
		'show_in_nav_menus' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
	));
	
  register_post_type('slide', array(
		'labels' => array(
			'name' => 'Slides',
			'singular_name' => 'Slide'
		),
		'menu_icon' => 'dashicons-images-alt2',
		'public' => false,
		'show_ui' => true,
		'publicly_queryable' => false,
		'show_in_nav_menus' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
	));
	
  register_post_type('faq', array(
		'labels' => array(
			'name' => 'FAQ',
			'singular_name' => 'FAQ'
		),
		'menu_icon' => 'dashicons-visibility',
		'public' => false,
		'show_ui' => true,
		'publicly_queryable' => false,
		'show_in_nav_menus' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
	));
	
}
add_action( 'init', 'create_post_types' );