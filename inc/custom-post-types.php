<?php
function create_post_types () {

  register_post_type('product', array(
		'labels' => array(
			'name' => 'Products',
			'singular_name' => 'Product'
		),
		'menu_icon' => 'dashicons-lightbulb',
		'public' => true,
		'show_ui' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array( 'category' )
	));

}
add_action( 'init', 'create_post_types' );