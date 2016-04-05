<?php

function schedule_v2_list_init() {

	$labels = array(
		'name'                  => _x( 'Schedules', 'post type general name' ),
		'singular_name'         => _x( 'Schedule', 'post type singular name' ), // must be different with the general name
		'menu_name'             => _x( 'Schedule List', 'admin menu' ),
		'name_admin_bar'        => _x( 'Schedule List', 'add new on admin bar' ),
		'add_new_item'          => __( 'Add New Schedule' ),
		'new_item'              => __( 'New Schedule' ),
		'edit_item'             => __( 'Edit Schedule' ),
		'view_item'             => __( 'View Schedule' ),
		'all_items'             => __( 'All Schedules' ),
		'search_items'          => __( 'Search Schedules' ),
		'not_found'             => __( 'No Events found.' ),
		'not_found_in_trash'    => __( 'No Events found in Trash.' )
	);

	$args   = array(
		'labels'                => $labels,
		'description'           => __( 'Create Schedule' ),
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'schedule-v2' ),
		'capability_type'       => 'post',
		'has_archive'           => true,
		'hierarchical'          => true,
		'menu_position'         => 6,
		'register_meta_box_cb'  => 'add_schedule_v2_metaboxes',
		'menu_icon'             => 'dashicons-calendar-alt',
		'supports'              => array( 'title' )
	);

	register_post_type('schedule_v2', $args);
}

add_action('init', 'schedule_v2_list_init');



