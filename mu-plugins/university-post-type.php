<?php

function fu_university_post_types() {

	// Event Post Type
    register_post_type( 'event', array(
        'labels' => array(
            'name'          => 'Events',
            'add_new_item'  => 'Add New Event',
            'edit_item'     => 'Edit Event',
            'all_items'     => 'All Events',
            'singular_name' => 'Event',
        ),
        'public'        => true,
        'menu_icon'     => 'dashicons-calendar',
        'menu_position' => 30,
        'show_in_menu'  => true,
	    'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'events' ),
        'supports'      => array( 'title', 'editor', 'excerpt' ),
	    'capability_type' => 'event',
	    'map_meta_cap'  => true
    ) );

    // Program Post Type
	register_post_type( 'program', array(
		'labels' => array(
			'name'          => 'Programs',
			'add_new_item'  => 'Add New Program',
			'edit_item'     => 'Edit Program',
			'all_items'     => 'All Programs',
			'singular_name' => 'Program',
		),
		'public'        => true,
		'menu_icon'     => 'dashicons-awards',
		'menu_position' => 31,
		'show_in_menu'  => true,
		'has_archive'   => true,
		'rewrite'       => array( 'slug' => 'programs' ),
		'supports'      => array( 'title' )
	) );

	// Professor Post Type
	register_post_type( 'professor', array(
		'labels' => array(
			'name'          => 'Professors',
			'add_new_item'  => 'Add New Professor',
			'edit_item'     => 'Edit Professor',
			'all_items'     => 'All Professors',
			'singular_name' => 'Professor',
		),
		'public'        => true,
		'menu_icon'     => 'dashicons-welcome-learn-more',
		'menu_position' => 32,
		'show_in_menu'  => true,
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'show_in_rest'  => true,
	) );

	// Campus Post Type
	register_post_type( 'campus', array(
		'labels' => array(
			'name'          => 'Campuses',
			'add_new_item'  => 'Add New Campus',
			'edit_item'     => 'Edit Campus',
			'all_items'     => 'All Campuses',
			'singular_name' => 'Campus',
		),
		'public'        => true,
		'menu_icon'     => 'dashicons-location-alt',
		'menu_position' => 30,
		'show_in_menu'  => true,
		'has_archive'   => true,
		'rewrite'       => array( 'slug' => 'campuses' ),
		'supports'      => array( 'title', 'editor', 'excerpt' ),
		'capability_type' => 'campus',
		'map_meta_cap'  => true
	) );

	// Note Post Type
	register_post_type( 'note', array(
		'labels' => array(
			'name'          => 'Notes',
			'add_new_item'  => 'Add New Note',
			'edit_item'     => 'Edit Note',
			'all_items'     => 'All Notes',
			'singular_name' => 'Note',
		),
		'public'        => false, // will not show in search result
		'show_ui'       => true,  // show in admin panel
		'menu_icon'     => 'dashicons-welcome-write-blog',
		'supports'      => array( 'title', 'editor' ),
		'show_in_rest'  => true,
	) );
}
add_action( 'init', 'fu_university_post_types' );
