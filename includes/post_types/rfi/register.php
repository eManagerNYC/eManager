<?php

add_action( 'init', 'eman_register_post_type_rfi' );
function eman_register_post_type_rfi()
{
	$menu_position = 30;
	$labels = array(
		'name'               => 'RFIs',
		'singular_name'      => 'RFI',
		'add_new_item'       => 'Add new RFI',
		'edit_item'          => 'Edit RFI',
		'new_item'           => 'New RFI',
		'view_item'          => 'View RFI',
		'search_items'       => 'Search RFIs',
		'not_found'          => 'No RFI found',
		'not_found_in_trash' => 'No RFI found in trash',
		'parent_item_colon'  => 'Parent RFI',
	);
	$emanager = array(
		'title_label'        => 'RFI Subject',
		'icon'               => 'list-alt',
		'form'               => array('acf_rfis','acf_rfis-signature'),
		'type'               => 'dashboard',
		'access'             => array('turner','owner'),
		'table_cols'         => array(
			'title'              => 'Title',
			'generated_by'       => 'Generated By',
			'assigned_to'        => 'Assigned To',
		),
		'taxonomy'       => array(
			'name'           => 'em_status',
			'terms'          => array(
				'draft'          => 'Draft',
				'open'           => 'Open',
				'closed'         => 'Closed',
				'void'           => 'Void'
			),
		),
	);
	register_post_type( 'em_rfi', array(
		'labels'             => $labels,
		'hierarchical'       => true,
		'description'        => $labels['name'],
		'public'             => true,
		'show_in_nav_menus'  => false,
		'show_in_menu'       => 'emanager_field',
		'exclude_from_search'=> true,
		'has_archive'        => true,
		'menu_position'      => $menu_position,
		'supports'           => array( 'title', 'comments', 'author', 'revisions', 'page-attributes' ),
		'rewrite'            => array( 'slug' => 'rfi', 'feeds' => false ),
		'has_archive'        => 'rfis',
		'emanager'           => $emanager,
	) );
}