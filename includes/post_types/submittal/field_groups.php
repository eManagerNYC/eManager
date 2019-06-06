<?php

if ( function_exists("register_field_group") )
{
	register_field_group(array (
		'id' => 'acf_submittalpackage',
		'title' => 'Submittal Packages',
		'fields' => array (
			array (
				'key' => 'field_53ebb0d665306',
				'label' => 'Specification Section',
				'name' => 'specification_section',
				'type' => 'number',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '######',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => 999999,
				'step' => '',
			),
			array (
				'key' => 'field_53ebaa51d1be4',
				'label' => 'Package Number',
				'name' => 'package_number',
				'type' => 'number',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_53ebab4cd1be5',
				'label' => 'Contract',
				'name' => 'contract',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'em_contracts',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_53ebac96d1bef',
				'label' => 'Importance',
				'name' => 'importance',
				'type' => 'select',
				'choices' => array (
					'high' => 'High',
					'medium' => 'Medium',
					'low' => 'Low',
				),
				'default_value' => 'medium',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_53ebab69d1be6',
				'label' => 'Required on Job',
				'name' => 'required_on_job',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53ebabb6d1be7',
				'label' => 'Fabrication and Delivery Lead Time',
				'name' => 'fabrication_and_delivery_lead_time',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '(days)',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_53ebabe0d1be8',
				'label' => 'Review and Resubmit Lead Time',
				'name' => 'review_and_resubmit_lead_time',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '(days)',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_53ebabf2d1be9',
				'label' => 'Other Lead Time',
				'name' => 'other_lead_time',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '(days)',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_53ebac02d1bea',
				'label' => 'Package Due from Subcontractor',
				'name' => 'package_due_from_subcontractor',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53ebac1ed1beb',
				'label' => 'All Package Items Received from Subcontractor',
				'name' => 'all_package_items_received_from_subcontractor',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53ebac34d1bec',
				'label' => 'Date Package Release for Construction',
				'name' => 'date_package_release_for_construction',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53ebac65d1bee',
				'label' => 'Status',
				'name' => 'status',
				'type' => 'taxonomy',
				'required' => 1,
				'taxonomy' => 'category',
				'field_type' => 'select',
				'allow_null' => 0,
				'load_save_terms' => 1,
				'return_format' => 'object',
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'em_package',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_submittal',
		'title' => 'Submittals',
		'fields' => array (
			array (
				'key' => 'field_53eb9ce09b5f7',
				'label' => 'Type',
				'name' => 'type',
				'type' => 'taxonomy',
				'required' => 1,
				'taxonomy' => 'em_submittaltype',
				'field_type' => 'select',
				'allow_null' => 0,
				'load_save_terms' => 1,
				'return_format' => 'object',
				'multiple' => 0,
			),
			array (
				'key' => 'field_53eb9d499b5f8',
				'label' => 'Closeout Item',
				'name' => 'closeout_item',
				'type' => 'true_false',
				'required' => 1,
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_53eba0179b5fa',
				'label' => 'Specification Sub-section',
				'name' => 'specification_sub-section',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53eba03f9b5fb',
				'label' => 'Submittal Package',
				'name' => 'submittal_package',
				'type' => 'post_object',
				'required' => 1,
				'post_type' => array (
					0 => 'em_package',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_53eba0a59b5fc',
				'label' => 'Locations',
				'name' => 'locations',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'post',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 1,
			),
			array (
				'key' => 'field_53eba0d29b5fd',
				'label' => 'Due From Sub',
				'name' => 'due_from_sub',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53eba10f9b5fe',
				'label' => 'Received From Sub',
				'name' => 'received_from_sub',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53eba1be9b5ff',
				'label' => 'Submitted To Consultants',
				'name' => 'submitted_to_consultants',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53eba1d79b600',
				'label' => 'Consultant Review Period',
				'name' => 'consultant_review_period',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '(days)',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_53eba2099b601',
				'label' => 'Due From Consultants',
				'name' => 'due_from_consultants',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53eba21a9b602',
				'label' => 'Returned From Consultants',
				'name' => 'returned_from_consultants',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53eba2259b603',
				'label' => 'Issued To Sub',
				'name' => 'issued_to_sub',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_53ebb6b0a18a2',
				'label' => 'Action',
				'name' => 'action',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'AAN' => 'Approved as Noted',
					'APP' => 'Approved',
					'RAR' => 'Revise and Resubmit',
					'REJ' => 'Rejected',
					'FRO' => 'For Record Only',
				),
				'default_value' => '',
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_53ebb70aa18a3',
				'label' => 'Status',
				'name' => 'status',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'EXPECTED' => 'EXPECTED',
					'DRAFT' => 'DRAFT',
					'PENDING' => 'PENDING',
					'RETURNED' => 'RETURNED',
					'CLOSED' => 'CLOSED',
					'SUPERCEDED' => 'SUPERCEDED',
					'VOID' => 'VOID',
				),
				'default_value' => 'EXPECTED',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'em_submittal',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}