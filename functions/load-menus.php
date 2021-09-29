<?php
if ( ! function_exists( 'soloed_menus' ) ) {

    // Register Navigation Menus
    function soloed_menus() {
    
        $locations = array(
            'header' => __( 'Header Menu', 'soloed' ),
            'primaryfooter' => __( 'Footer A', 'soloed' ),
            'secondaryfooter' => __( 'Footer B', 'soloed' ),
        );
        register_nav_menus( $locations );
    
    }
    add_action( 'init', 'soloed_menus' );
    
}