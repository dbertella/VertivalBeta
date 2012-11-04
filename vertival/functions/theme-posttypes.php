<?php
/*-----------------------------------------------------------------------------------

	Add Slide Post Type

-----------------------------------------------------------------------------------*/


function tz_create_post_type_slide() 
{
	$labels = array(
		'name' => __( 'Slides','framework'),
		'singular_name' => __( 'Slide','framework' ),
		'add_new' => __('Add New','framework'),
		'add_new_item' => __('Add New Slide','framework'),
		'edit_item' => __('Edit Slide','framework'),
		'new_item' => __('New Slide','framework'),
		'view_item' => __('View Slide','framework'),
		'search_items' => __('Search Slide','framework'),
		'not_found' =>  __('No slide found','framework'),
		'not_found_in_trash' => __('No slide found in Trash','framework'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','thumbnail')
	  ); 
	  
	  register_post_type(__( 'slide' ),$args);
}

add_action( 'init', 'tz_create_post_type_slide' );


?>