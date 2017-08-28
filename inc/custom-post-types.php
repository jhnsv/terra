<?php
function create_post_types () {

  register_post_type('block', array(
		'labels' => array(
			'name' => 'Blocks',
			'singular_name' => 'Block'
		),
		'menu_icon' => 'dashicons-screenoptions',
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
	));
	
}
add_action( 'init', 'create_post_types' );