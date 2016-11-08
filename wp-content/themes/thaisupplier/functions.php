<?php

add_theme_support( 'post-thumbnails' ); 

function theme_styles()  
{ 

	// Example of loading a jQuery slideshow plugin just on the homepage
	// wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );

	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'navbar', get_template_directory_uri() . '/css/navbar.css' );

	// Conditionally load the FlexSlider CSS on the homepage
	// if(is_page('home')) {
	// 	wp_enqueue_style('flexslider');
	// }

}
add_action('wp_enqueue_scripts', 'theme_styles');

function custom_meta_box_markup()
{
    echo the_category_ID() ;
    print_r(the_post());
}

function add_custom_meta_box()
{

 // cat_is_ancestor_of( $cat1, $cat2 )
	if(has_category( "product" )){
		
    	add_meta_box("demo-meta-box", "Product detail" .the_category_ID(), "custom_meta_box_markup", "post", "normal", "high", null);
	}
}

add_action("add_meta_boxes", "add_custom_meta_box");