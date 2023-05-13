<?php
/**
 * Doyel Grid Two Column functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Doyel Grid Two Column
 */

if ( ! defined( 'MOINA_GRID_TWO_COLUMN_VERSION' ) ) {
	$moina_grid_two_column_theme = wp_get_theme();
	define( 'MOINA_GRID_TWO_COLUMN_VERSION', $moina_grid_two_column_theme->get( 'Version' ) );
}


/**
 * Enqueue scripts and styles.
 */
function moina_grid_two_column_scripts() {
    wp_enqueue_style( 'moina-grid-two-column-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','moina-default-block','moina-style'), '', 'all');
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
    wp_enqueue_style( 'moina-grid-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), MOINA_GRID_TWO_COLUMN_VERSION, 'all');
    wp_enqueue_script( 'masonry', get_stylesheet_directory_uri() . '/assets/js/masonry.pkgd.min.js',array('jquery'), MOINA_GRID_TWO_COLUMN_VERSION, true );
    wp_enqueue_script( 'moina-grid-main-js', get_stylesheet_directory_uri() . '/assets/js/moina-grid-main.js',array('jquery','moina-script'), MOINA_GRID_TWO_COLUMN_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'moina_grid_two_column_scripts' );

/**
 * Custom excerpt length.
 */
function moina_grid_two_column_excerpt_length( $length ) {
    if ( is_admin() ) return $length;
    return 19;
}
add_filter( 'excerpt_length', 'moina_grid_two_column_excerpt_length', 999 );

/**
 * Custom excerpt More.
 */
function moina_grid_two_column_excerpt_more( $more ) {
    if ( is_admin() ) return $more;
    return '.';
}
add_filter( 'excerpt_more', 'moina_grid_two_column_excerpt_more' );

/**
 * Load Doyel Tags files.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';