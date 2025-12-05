<?php
/**
 * Cakified functions and definitions
 *
 * @package Cakified
 * 
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * This function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support for post thumbnails.
 */
function cakified_setup() {

    // Load theme's textdomain for internationalization.
    load_theme_textdomain( 'cakified', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Add support for custom logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 240,
        'width'       => 240,
        'flex-height' => true,
    ) );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images/blocks.
    add_theme_support( 'align-wide' );

    // Add support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5. Removed 'navigation-widgets' as FSE themes handle navigation differently.
     */
    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            // 'navigation-widgets' is typically not needed in FSE themes.
        )
    );

    // Enable editor styles for consistent appearance between editor and frontend.
    add_theme_support( 'editor-styles' );

    // Enqueue editor styles. This is where you can add custom styles for the block editor.
    add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'cakified_setup' );

/**
 * Enqueue scripts and styles.
 *
 * This function is primarily for custom scripts/styles not handled by theme.json.
 */
function cakified_enqueue_assets() {
    // Enqueue custom CSS file if needed (e.g., for very specific styles not covered by theme.json)
    wp_enqueue_style( 'cakified-basic-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'cakified_enqueue_assets' );

/* Redirect on theme activation */
add_action( 'admin_init', 'cakified_theme_activation_redirect' );

/**
 * Redirect to "Install Plugins" page on activation
 */
function cakified_theme_activation_redirect() {
	global $pagenow;
	if ( "themes.php" == $pagenow && is_admin() && isset( $_GET['activated'] ) ) {
		wp_redirect( esc_url_raw( add_query_arg( 'page', 'cakified-theme', admin_url( 'themes.php' ) ) ) );
	}
}

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

// Theme About Page
require get_template_directory() . '/inc/about.php';