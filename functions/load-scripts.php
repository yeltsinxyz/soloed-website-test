<?php
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