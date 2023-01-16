<?php


/**
* Hero Slider Post Type Area 
*/ 

function create_post_type_hero_slider(){
	register_post_type('hero-slider',array(
		'label'	=> 'Hero Slider',
		'public'=> true,
		'supports'=> array('title','thumbnail'),
		'menu_icon'   => 'dashicons-slides',
	));

}
add_action('init','create_post_type_hero_slider');



function create_post_type_reviews(){
	
register_post_type('reviews',array(
	
	'public'		    =>true,
	'labels'		    =>array(
		'name'		    =>'Reviews services',
		'singular_name' => 'Review',
		'add_new'	    =>'add_new_reviews',
		'add_items'	    =>'All Review',
		'add_new_item'	=>'Add New Review',
		'not_found' => 'No Products found',
        'not_found_in_trash' => 'No Products found in Trash'
		),
	'menu_icon'		=> 'dashicons-star-empty',
	'supports'		=>array('title','thumbnail','custom-fields','author','editor'),

    ));

}
add_action('init','create_post_type_reviews');



?>