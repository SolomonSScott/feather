<?php
/**
 * Theme constants.
 *
 * @package Feather
 */

/**
 * Useful global constants for Feather theme.
 */
function define_feather_constants() {
	if ( ! defined( 'FEATHER_VERSION' ) ) {
		define( 'FEATHER_VERSION', '1.0.0' );
	}
	if ( ! defined( 'FEATHER_THEME_PATH' ) ) {
		define( 'FEATHER_THEME_PATH', get_template_directory() . '/' );
	}
	if ( ! defined( 'FEATHER_THEME_URL' ) ) {
		define( 'FEATHER_THEME_URL', get_template_directory_uri() );
	}
}
add_action( 'init', 'define_feather_constants' );
