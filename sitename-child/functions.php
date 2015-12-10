<?php
/**
 * Functions
 */

add_action( 'wp_enqueue_scripts', 'sitenameprefix_theme_enqueue_styles' );

function sitenameprefix_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 * Note this example will only work if your Parent Theme uses
 * only one main style.css to hold all of the css. 
 * If your theme has more than one .css file then you will
 * have to make sure to maintain all of the Parent Theme dependencies
 */
