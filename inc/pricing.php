<?php
// Register Custom Post Type Pricing
function create_pricing_cpt() {

	$labels = array(
		'name' => _x( 'Pricings', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Pricing', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Pricings', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Pricing', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Pricing Archives', 'textdomain' ),
		'attributes' => __( 'Pricing Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Pricing:', 'textdomain' ),
		'all_items' => __( 'All Pricings', 'textdomain' ),
		'add_new_item' => __( 'Add New Pricing', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Pricing', 'textdomain' ),
		'edit_item' => __( 'Edit Pricing', 'textdomain' ),
		'update_item' => __( 'Update Pricing', 'textdomain' ),
		'view_item' => __( 'View Pricing', 'textdomain' ),
		'view_items' => __( 'View Pricings', 'textdomain' ),
		'search_items' => __( 'Search Pricing', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Pricing', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Pricing', 'textdomain' ),
		'items_list' => __( 'Pricings list', 'textdomain' ),
		'items_list_navigation' => __( 'Pricings list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Pricings list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Pricing', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-money',
		'supports' => array('title','page-attributes','custom-fields'),
		'taxonomies' => array('service_category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'pricing', $args );

}
add_action( 'init', 'create_pricing_cpt', 0 );
?>