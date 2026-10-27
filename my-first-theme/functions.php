<?php
/**
 * Theme setup and assets for MyFirstTheme.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function my_first_theme_setup() {
	load_theme_textdomain( 'my-first-theme', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'my_first_theme_setup' );

function my_first_theme_enqueue_styles() {
	wp_enqueue_style( 'my-first-theme', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'my_first_theme_enqueue_styles' );
