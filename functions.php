<?php

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 900;

if ( ! function_exists('soloed_theme_support') ) {

// Register Theme Features
function soloed_theme_support()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'FFFFFF',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	// Add theme support for Translation
	load_theme_textdomain( 'soloed', get_template_directory() . '/lang' );
}
add_action( 'after_setup_theme', 'soloed_theme_support' );

}

if ( ! function_exists( 'soloed_menus' ) ) {

    // Register Navigation Menus
    function soloed_menus() {
    
        $locations = array(
            'header' => __( 'Menu localizado no topo do site', 'soloed' ),
            'footer' => __( 'Menu localizado no rodapé do site', 'soloed' ),
        );
        register_nav_menus( $locations );
    
    }
    add_action( 'init', 'soloed_menus' );
    
}

// Register Script
function soloed_scripts() {

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.js', false, false, true );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'what-input', get_template_directory_uri() . '/node_modules/what-input/dist/what-input.js', false, false, true );
	wp_enqueue_script( 'what-input' );

	wp_register_script( 'foundation', get_template_directory_uri() . '/node_modules/foundation-sites/dist/js/foundation.js', false, false, true );
	wp_enqueue_script( 'foundation' );

    wp_register_script( 'glidejscss', get_template_directory_uri() . '/node_modules/@glidejs/glide/dist/glide.min.js', false, false, true );
    wp_enqueue_script( 'glidejscss' );

	wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', false, false, true );
	wp_enqueue_script( 'app' );

}
add_action( 'wp_enqueue_scripts', 'soloed_scripts' );

// Register Style
function soloed_styles() {

	wp_register_style( 'app', get_template_directory_uri() . '/css/app.css', false, false );
	wp_enqueue_style( 'app' );

    wp_register_style( 'glidejs', get_template_directory_uri() . '/node_modules/@glidejs/glide/dist/css/glide.core.min.css', false, false );
    wp_enqueue_style( 'glidejs' );

}
add_action( 'wp_enqueue_scripts', 'soloed_styles' );

/**
 * ADVANCED CUSTOM FIELDS
 * CONFIGURATION FILES
*/
require_once( get_template_directory() . '/acf/options-page.php' );
require_once( get_template_directory() . '/acf/theme-options.php' );
require_once( get_template_directory() . '/acf/home.php');