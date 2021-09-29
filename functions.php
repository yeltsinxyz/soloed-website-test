<?php

require_once( get_template_directory() . '/functions/theme-support.php' );

/**
 * LOAD MENUS
 */
require_once( get_template_directory() . '/functions/load-menus.php' );

/**
 * LOAD SCRIPTS AND
 * STYLESHEETS
 */
require_once( get_template_directory() . '/functions/load-scripts.php' );

/**
 * SUPPORT CUSTOM FORMATS
 * LIKE SVG
 */
require_once( get_template_directory() . '/functions/svg-support.php' );

/**
 * ADVANCED CUSTOM FIELDS
 * CONFIGURATION FILES
 */
require_once( get_template_directory() . '/acf/options-page.php' );
require_once( get_template_directory() . '/acf/theme-options.php' );
require_once( get_template_directory() . '/acf/home.php');