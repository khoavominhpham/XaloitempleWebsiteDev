<?php
function theme_styles(){
	// Bootstrap stylesheet
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.css' );
	// Flaticon fonts 
	wp_enqueue_style('flaticon_font_css', get_template_directory_uri().'/fonts/flaticon.css' );
	// My main stylesheet
	wp_enqueue_style('main_css', get_template_directory_uri().'/style.css' );
}
add_action('wp_enqueue_scripts', 'theme_styles' );
		
// HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries 
// WARNING: Respond.js doesn't work if you view the page via file:// 
function theme_js(){

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '','', false);
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js','conditional', 'lt IE 9');

	//Bootstrap core JavaScript
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'),'', true );
	//Customized JS file
	wp_enqueue_script( 'theme_js', get_template_directory_uri().'/js/theme.js', array('jquery', 'bootstrap_js'), '', true );

}
add_action('wp_enqueue_scripts', 'theme_js' );	

//Turn off wp admin bar
//add_filter('show_admin_bar', '__return_false' );

add_theme_support('menus' );

function register_theme_menus(){

	register_nav_menus(
		array(
				'header-menu' => __('Header Menu')
			)
	 );
}
add_action('init', 'register_theme_menus' );

//Enable Feature images
add_theme_support( 'post-thumbnails' ); 

?>