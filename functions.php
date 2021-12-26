<?php

function h2h_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'h2h_theme_support');

function h2h_menus(){
	$locations = array(
		'primary' => "Navigation Menu"
	);

	register_nav_menus($locations);
}

add_action('init', 'h2h_menus');

function h2h_register_styles(){
	$version = wp_get_theme()->get( 'version' );

	wp_enqueue_style("h2h-style-css", get_template_directory_uri() . "/style.css", $version, "all");
	// wp_enqueue_style("h2h-style-content", get_template_directory_uri() . "/assets/css/content.css", $version, "all");
	// wp_enqueue_style("h2h-style-courseOutline", get_template_directory_uri() . "/assets/css/courseOutline.css", $version, "all");
	// wp_enqueue_style("h2h-style-coursePages", get_template_directory_uri() . "/assets/css/coursePages.css", $version, "all");
	// wp_enqueue_style("h2h-style-dashboard", get_template_directory_uri() . "/assets/css/dashboard.css", $version, "all");
	// wp_enqueue_style("h2h-style-footer", get_template_directory_uri() . "/assets/css/footer.css", $version, "all");
	// wp_enqueue_style("h2h-style-homepage", get_template_directory_uri() . "/assets/css/homepage.css", $version, "all");
	// wp_enqueue_style("h2h-style-login", get_template_directory_uri() . "/assets/css/login.css", $version, "all");
	// wp_enqueue_style("h2h-style-myAccount", get_template_directory_uri() . "/assets/css/myAccount.css", $version, "all");
	// wp_enqueue_style("h2h-style-navbar", get_template_directory_uri() . "/assets/css/navbar.css", $version, "all");

	wp_enqueue_style("h2h-style-gill-sans", get_template_directory_uri() . "/assets/fonts/Gill Sans/demo.css", false);
	wp_enqueue_style("h2h-style-trade-gotic", get_template_directory_uri() . "/assets/fonts/Trade Gothic/demo.css", false);
}

add_action('wp_enqueue_scripts', 'h2h_register_styles');

function h2h_register_scripts(){
	$version = wp_get_theme()->get( 'version' );

	wp_enqueue_script("h2h-script-jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
	wp_enqueue_script("h2h-script-cdn", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16.0", true);
	wp_enqueue_script("h2h-script-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", true);
	wp_enqueue_script("h2h-script-main", get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);	
}

add_action('wp_enqueue_scripts', 'h2h_register_scripts');
?>