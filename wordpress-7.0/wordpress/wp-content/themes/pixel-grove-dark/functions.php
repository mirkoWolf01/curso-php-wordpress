<?php


/**
 * Pixel Grove Dark functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Pixel Grove Dark
 * @since Pixel Grove Dark 1.0
 */

 function pixel_grove_dark_block_assets(){
    // Enqueue theme stylesheet for the front-end.
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );
	wp_enqueue_style( 'animatecss', get_stylesheet_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'pixel-grove-dark-style', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script('wow-script', get_stylesheet_directory_uri() . '/assets/js/wow.js', array('jquery'));
	wp_enqueue_script('jquery-sticky', get_stylesheet_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );  
	wp_enqueue_script('pixel-grove-dark-main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
  
}

add_action('enqueue_block_assets', 'pixel_grove_dark_block_assets');

// register own theme pattern

function pixel_grove_dark_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'pixel-grove-dark' => array( 'label' => __( 'Pixel Grove Dark', 'pixel-grove-dark' ) )
	);

	$block_pattern_categories = apply_filters( 'pixel_grove_dark_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'pixel_grove_dark_register_pattern_category');