<?php
function sbportfolio_testimony_CPT() {
	$labels = array(
		'name'                => _x( 'Testimonies', 'Post Type General Name', 'sb-portfolio' ),
		'singular_name'       => _x( 'Testimony', 'Post Type Singular Name', 'sb-portfolio' ),
		'menu_name'           => __( 'Testimonies', 'sb-portfolio' ),
		'parent_item_colon'   => __( 'Parent Testimony', 'sb-portfolio' ),
		'all_items'           => __( 'All Testimonies', 'sb-portfolio' ),
		'view_item'           => __( 'View Testimony', 'sb-portfolio' ),
		'add_new_item'        => __( 'Add New Testimony', 'sb-portfolio' ),
		'add_new'             => __( 'Add New', 'sb-portfolio' ),
		'edit_item'           => __( 'Edit Testimony', 'sb-portfolio' ),
		'update_item'         => __( 'Update Testimony', 'sb-portfolio' ),
		'search_items'        => __( 'Search Testimony', 'sb-portfolio' ),
		'not_found'           => __( 'Not Found', 'sb-portfolio' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sb-portfolio' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'                 => __( 'testimonies', 'sb-portfolio' ),
		'description'           => __( 'Testimony news and reviews', 'sb-portfolio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'genres' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'show_in_admin_bar'     => true,
		'menu_position'         => 5,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'menu_icon'             => 'dashicons-controls-volumeon'

	);

	// Registering your Custom Post Type
	register_post_type( 'testimonies', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'sbportfolio_testimony_CPT', 0 );