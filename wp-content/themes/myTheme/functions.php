<?php

/* Activate Custom Post Type */
function custom_post_type() {
	$labels = array(
		'name' => 'Work',
		'singular_name' => 'work',
			'add_new' => 'Add New',
		'all_items' => 'All Item',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Work',
		'not_found' => 'No Items Found',
		'not_found_in_trash' => 'No Items Found In Trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array (
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicaly_queryable' => true,
		'qurey_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'support' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions'
		),
		'taxonomies' => array(
			'category',
			'post_tag'
		),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('Work', $args);
}
add_action( 'init', 'custom_post_type' );

//* Add support for custom header
add_theme_support( 'custom-header', array(
		'flex-width'      => true,
		'width'           => 400,
		'flex-height'     => true,
		'height'          => 150,
		'header-selector' => '.site-title a',
) );

/* Activate Nav Menu Option */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'social-menu' => __( 'Social Menu' )
     )
   );
 }

add_action( 'after_setup_theme', 'register_my_menus' );

add_action( 'customize_register', 'genesischild_register_theme_customizer' );
/*
 * Register Our Customizer Stuff Here
 */
function genesischild_register_theme_customizer( $wp_customize ) {

	// Create custom panel.
	$wp_customize->add_panel( 'text_blocks', array(
		'priority'       => 500,
		'theme_supports' => '',
		'title'          => __( 'Footer Block', 'genesischild' ),
		'description'    => __( 'Set editable text for certain content.', 'genesischild' ),
	) );
	// Add Footer Text
	// Add section.
	$wp_customize->add_section( 'custom_footer_text' , array(
		'title'    => __('Change Footer Text','genesischild'),
		'panel'    => 'text_blocks',
		'priority' => 10
	) );
	// Add setting
	$wp_customize->add_setting( 'footer_text_block', array(
		'default'           => __( 'default text', 'genesischild' ),
		'sanitize_callback' => 'footer_text'
	) );
	// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'custom_footer_text',
		    array(
		        'label'    => __( 'Footer Text', 'genesischild' ),
		        'section'  => 'custom_footer_text',
		        'settings' => 'footer_text_block',
		        'type'     => 'text'
		    )
	    )
	);

	function footer_text( $text ) {
	    return sanitize_text_field( $text );
	}
}
?>