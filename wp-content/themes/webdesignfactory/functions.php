<?php
function nts_script_enqueue() {
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap-alerts', get_template_directory_uri() . '/css/bootstrap-alerts.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('style', get_stylesheet_uri()); 

//wp_enqueue_style('style-hrisi', get_template_directory_uri() . '/css/style-hrisi.css', array(), '1.0.0', 'all');
	wp_enqueue_script('jquery'); 
	// wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/css/flexslider.css', array(), '1.0.0', 'all');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-alerts', get_template_directory_uri() . '/js/bootstrap-alerts.min.js', array(), '1.0.0', true );
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script('jquery_watermark', get_template_directory_uri() . '/js/jquery.watermark.min.js', array(), '1.0.0', true );
	wp_enqueue_script('wurfl',  'http://wurfl.io/wurfl.js', array(), '1.0.0', true );
	wp_enqueue_script('customfunctions', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true );
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), '1.0.0', true );
	// global $current_user;
	// $current_user = wp_get_current_user();
	// wp_localize_script( 'customfunctions', 'theUser', array ('username' => $current_user->user_login,) );
	wp_enqueue_script('jquery_cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom-ajax-request',  get_template_directory_uri() . '/js/ajax.js', array( 'jquery' ) );
	wp_localize_script( 'custom-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'nts_script_enqueue');
/* Menu setup */
add_action('init', 'nts_menu_setup');
function nts_menu_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
	register_nav_menu('header-menu', 'Header menu');
	register_nav_menu('account-menu', 'Account menu');
}

/* Ajax request sample */
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
function load_more_posts(){
	//Your ajax data here. 
	die();
}
/* Widgets register */
add_action('widgets_init', 'nts_widgets');
function nts_widgets(){
}
/* Enable sessions */
add_action('init', 'myStartSession', 1);
function myStartSession() {
	if(!session_id()) {
		session_start();
	}
}
include(get_template_directory().'/includes/formValidating.php'); 
