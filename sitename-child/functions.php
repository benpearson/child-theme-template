<?php
/**
 * Functions
 */

add_action( 'wp_enqueue_scripts', 'sitenameprefix_theme_enqueue_styles' );

function sitenameprefix_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
