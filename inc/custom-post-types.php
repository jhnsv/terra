<?php
function create_post_types () {

  register_post_type('block', array(
		'labels' => array(
			'name' => 'Blocks',
			'singular_name' => 'Block'
		),
		'menu_icon' => 'dashicons-screenoptions',
		'public' => true,
		'publicly_queryable' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
	));
	
  register_post_type('slide', array(
		'labels' => array(
			'name' => 'Slides',
			'singular_name' => 'Slide'
		),
		'menu_icon' => 'dashicons-images-alt2',
		'public' => true,
		'publicly_queryable' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
	));
	
}
add_action( 'init', 'create_post_types' );