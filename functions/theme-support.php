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