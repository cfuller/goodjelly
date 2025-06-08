<?php

add_action( 'wp_enqueue_scripts', 'goodjelly_enqueue_styles' );
/**
 * Enqueue scripts and styles.
 */
function goodjelly_enqueue_styles() {
  // Register theme stylesheet.
  wp_enqueue_style(
    'goodjelly2025-style',
    get_stylesheet_uri(),
  );
}

function custom_year_shortcode () {
  return date_i18n('Y');
}
add_shortcode ('year', 'custom_year_shortcode');