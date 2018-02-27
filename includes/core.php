<?php
/**
 * Core theme functions
 *
 * @package Feather
 */

namespace Feather;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function feather_setup() {
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array(
		'search-form',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\feather_setup' );

/**
 * Enqueue feather Styles
 */
function feather_styles() {
	wp_register_style( 'feather-css', FEATHER_THEME_URL . '/dist/feather.css', null, FEATHER_VERSION );

	wp_enqueue_style( 'feather-css' );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\feather_styles' );

/**
 * Enqueue feather Scripts
 */
function feather_scripts() {
	wp_register_script( 'feather-js', FEATHER_THEME_URL . '/dist/feather.js', [], FEATHER_VERSION, true );

	wp_enqueue_script( 'feather-js' );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\feather_scripts' );

/**
 * Register feather menus
 */
function register_feather_menus() {
	register_nav_menus( [
		'primary' => 'Primary Menu',
	] );
}
add_action( 'init', __NAMESPACE__ . '\\register_feather_menus' );
