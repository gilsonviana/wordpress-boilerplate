<?php

function blank_setup() {

	/**
	 * Theme support
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Register navigation
	 */
	register_nav_menus(
		array(
			'menu-1' => __( 'Primary' )
		)
	);

};
add_action( 'after_setup_theme', 'blank_setup' );

function blank_scripts() {

	/**
	 * Enqueue main style file
	 */
	wp_enqueue_style( 'blank-style', get_stylesheet_uri(), array() );

	/**
	 * Enqueue main script file
	 */
	wp_enqueue_script( 'blank-script', get_theme_file_uri( '/js/main.js' ), array(), true );
};
add_action( 'wp_enqueue_scripts', 'blank_scripts' );