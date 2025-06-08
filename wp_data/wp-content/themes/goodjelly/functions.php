<?php
/**
 * Goodjelly Block Theme functions and definitions
 *
 * @package WordPress
 * @subpackage Goodjelly
 */

if ( ! function_exists( 'goodjelly_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function goodjelly_setup() {
        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style.css' );
    }
}
add_action( 'after_setup_theme', 'goodjelly_setup' );

/**
 * Enqueue scripts and styles.
 */
function goodjelly_enqueue_styles() {
    // Register theme stylesheet.
    wp_enqueue_style(
        'goodjelly-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );

    // Enqueue navigation script
    wp_enqueue_script(
        'goodjelly-navigation',
        get_theme_file_uri( 'assets/js/nav.js' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'goodjelly_enqueue_styles' );

/**
 * Register block patterns.
 */
function goodjelly_register_block_patterns() {
    // Register block pattern categories
    if ( function_exists( 'register_block_pattern_category' ) ) {
        register_block_pattern_category(
            'goodjelly',
            array( 'label' => __( 'Goodjelly', 'goodjelly' ) )
        );
    }
}
add_action( 'init', 'goodjelly_register_block_patterns' );