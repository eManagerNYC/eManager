<?php

if ( function_exists("register_field_group") )
{
	register_field_group(array (
		'id' => 'acf_meeting',
		'title' => 'meeting minutes',
		'fields' => array (
			array (
				'key' => 'field_544507786cace',
				'label' => 'Open to Companies',
				'name' => 'open_to_companies',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'em_companies',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 1,
			),
			array (
				'key' => 'field_5445079f6cacf',
				'label' => 'Sceduled Timeslot',
				'name' => '',
				'type' => 'message',
				'message' => 'Scheduled Timeslot
<hr>',
			),
			array (
				'key' => 'field_544507c96cad0',
				'label' => 'Day and Time',
				'name' => 'daytime',
				'type' => 'date_time_picker',
				'required' => 1,
				'show_date' => 'true',
				'date_format' => 'm/d/y',
				'time_format' => 'h:mm tt',
				'show_week_number' => 'false',
				'picker' => 'slider',
				'save_as_timestamp' => 'true',
				'get_as_timestamp' => 'false',
			),
			array (
				'key' => 'field_544507f06cad1',
				'label' => 'Recurrence',
				'name' => 'recurrance',
				'type' => 'select',
				'choices' => array (
					'Only Once' => 'Only Once',
					'Daily' => 'Daily',
					'Weekly' => 'Weekly',
					'Monthly' => 'Monthly',
					'Annually' => 'Annually',
				),
				'default_value' => 'Only Once',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_544508366cad2',
				'label' => 'Meeting Location',
				'name' => 'meeting_location',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5445085e6cad3',
				'label' => 'This Meeting (Date)',
				'name' => 'this_meeting_date',
				'type' => 'date_picker',
				'required' => 1,
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_544508796cad4',
				'label' => 'Meeting Number',
				'name' => 'meeting_number',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5445088d6cad5',
				'label' => 'Agenda/Minutes',
				'name' => 'agenda_minutes',
				'type' => 'file',
				'save_format' => 'object',
				'library' => 'all',
			),
			array (
				'key' => 'field_5445089e6cad6',
				'label' => 'Notes',
				'name' => 'notes',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_544508c16cad7',
				'label' => 'Attachments',
				'name' => 'attachments',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_5445092d6cad9',
						'label' => 'File',
						'name' => 'file',
						'type' => 'file',
						'column_width' => '',
						'save_format' => 'object',
						'library' => 'all',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_544509166cad8',
				'label' => 'Section Titles',
				'name' => 'section_titles',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_544509476cada',
						'label' => 'Section',
						'name' => 'section',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_544509526cadb',
				'label' => 'Linked Sections',
				'name' => 'linked_sections',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_544509616cadc',
						'label' => 'Section Number',
						'name' => 'section_number',
						'type' => 'number',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_544509746cadd',
						'label' => 'Linked action item',
						'name' => 'linked_action_item',
						'type' => 'post_object',
						'column_width' => '',
						'post_type' => array (
							0 => 'em_actionitem',
						),
						'taxonomy' => array (
							0 => 'all',
						),
						'allow_null' => 0,
						'multiple' => 0,
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'em_meeting',
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