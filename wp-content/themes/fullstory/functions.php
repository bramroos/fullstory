<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
require_once(get_template_directory().'/functions/cases.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php'); 

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Full Story Settings',
		'menu_title'	=> 'Full Story Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


function namespace_add_image_sizes(){
	add_image_size( 'extra-large-img', 1920, 1200, array('center', 'center') );
	add_image_size( 'large-img', 1600, 1000, array('center', 'center') );
	add_image_size( 'medium-img', 1024, 640, array('center', 'center') );
	add_image_size( 'small-img', 640, 400, array('center', 'center') );

	add_image_size( 'large-grid-img', 480, 600, array('center', 'center') );
}
add_action( 'init', 'namespace_add_image_sizes');


function my_tiny_mce_tweaks( $first_init ) {
	$first_init['formats'] = '{' .
		'alignleft: [' .
			'{selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li", styles: {textAlign:"left"}},' .
			'{selector: "img,table,dl.wp-caption", classes: "alignleft"}' .
		'],' .
		'aligncenter: [' .
			'{selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li", styles: {textAlign:"center"}},' .
			'{selector: "img,table,dl.wp-caption", classes: "aligncenter"}' .
		'],' .
		'alignright: [' .
			'{selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li", styles: {textAlign:"right"}},' .
			'{selector: "img,table,dl.wp-caption", classes: "alignright"}' .
		'],' .
		'strikethrough: {inline: "del"},' .
		'underline: {inline: "u"}' .
	'}';
  
	return $first_init;
  }
  add_filter('tiny_mce_before_init', 'my_tiny_mce_tweaks');