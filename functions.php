<?php
/**
* encoretennis functions and definitions
* @link https://developer.wordpress.org/themes/basics/theme-functions/
* @package encoretennis
*/

/* Store the theme's directory path and uri in constants */
define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

/* Timestamp css files (works on js too):
https://www.youtube.com/watch?v=kHp_yz3_6rI */

/* Enqueue styles and scripts */
function encoretennis_scripts() {

    // load Bootstrap CSS v5.1
    wp_enqueue_style( 'encoretennis-bootstrap-css', THEME_DIR_URI . '/includes/css/bootstrap.min.css');

    // load website CSS, versioned
    wp_enqueue_style( 'encoretennis-css', THEME_DIR_URI . '/assets/css/style.css', [], filemtime( get_stylesheet_directory() . '/assets/css/style.css') );

	// load Bootstrap JS v5.1
	wp_enqueue_script( 'encoretennis-bootstrap-js', THEME_DIR_URI . '/includes/js/bootstrap.min.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'encoretennis_scripts' );


// ACF Options
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'menu_title'    => 'Additional Settings',
        'menu_slug'     => 'additional-site-settings',
        'parent_slug'   => '',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-admin-site-alt',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'General Settings',
        'menu_title'    => 'General Settings',
        'parent_slug'   => 'additional-site-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Content',
        'menu_title'    => 'Footer Content',
        'parent_slug'   => 'additional-site-settings',
    ));
}

/* Register navigation */
function encoretennis_nav() {
    wp_nav_menu( 
        array( 
            'theme_location'    => 'primary',
            'depth'             => 2,
            'menu_id'           => 'primary-menu', 
            'container_class'   => 'ms-auto', 
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback', // check this
            'walker'            => new wp_bootstrap_navwalker(), // check this
        ) 
    );
}

/* Register menus */
if ( ! function_exists( 'encoretennis_setup' ) ) :
	function encoretennis_setup() {

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'encoretennis' ),
        'footer'  => __( 'Footer Menu', 'encoretennis' ),
    ) );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    // To make the theme widget aware: https://developer.wordpress.org/themes/functionality/widgets/
}
endif;
add_action( 'after_setup_theme', 'encoretennis_setup');

/* Load custom WordPress nav walker */
require_once THEME_DIR_PATH . '/includes/wp-bootstrap-navwalker5.php';
