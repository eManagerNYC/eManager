<?php

if ( function_exists("register_field_group") )
{
    if ( !($tier1 = get_option('options_location_tier_1'))) {
        $tier1 = 'Building';
    }
    if ( !($tier2 = get_option('options_location_tier_2'))) {
        $tier2 = 'Floor';
    }
    if ( !($tier3 = get_option('options_location_tier_3'))) {
        $tier3 = 'Subarea';
    }

	#$dcr_labor_breakdown = eman_get_field('dcr_labor_breakdown', 'option');
	$dcr_labor_breakdown = get_option('options_dcr_labor_breakdown');
	$man_hours = ( 'Man-hours' == $dcr_labor_breakdown ) ? true : false;
/** /
	$labortypes_field = array (
		'key' => 'field_529f4a5115158',
		'label' => 'Type',
		'name' => 'type',
		'type' => 'post_object',
		'column_width' => 20,
		'post_type' => array (
			0 => 'em_labortypes',
		),
		'taxonomy' => array (
			0 => 'all',
		),
		'allow_null' => 1,
		'multiple' => 0,
	);
/**/
	$labortypes_field = array (
		'key' => 'field_529f4a5115158',
		'label' => 'Type',
		'name' => 'type',
		'type' => 'text',
		'column_width' => 20,
		'default_value' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'formatting' => 'html',
		'maxlength' => '',
	);
	$mancount_field = array (
		'key' => 'field_52dfoij9lk349fm',
		'label' => 'Headcount',
		'name' => 'mancount',
		'type' => 'number',
		'column_width' => 5,
		'default_value' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'min' => '',
		'max' => '',
		'step' => '',
	);
	$subfields = array(
		array (
			'key' => 'field_529f4a9715159',
			'label' => 'Male Minority' . ($man_hours ? ' (hrs)' : ' (days)'),
			'name' => 'male_minority',
			'type' => 'number',
			'column_width' => 5,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array (
			'key' => 'field_52b8464b3140d',
			'label' => 'Male Non-Minority' . ($man_hours ? ' (hrs)' : ' (days)'),
			'name' => 'male_non-minority',
			'type' => 'number',
			'column_width' => 5,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array (
			'key' => 'field_52b8464a3140c',
			'label' => 'Female Minority' . ($man_hours ? ' (hrs)' : ' (days)'),
			'name' => 'female_minority',
			'type' => 'number',
			'column_width' => 5,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array (
			'key' => 'field_52b846443140b',
			'label' => 'Female Non-Minority' . ($man_hours ? ' (hrs)' : ' (days)'),
			'name' => 'female_non-minority',
			'type' => 'number',
			'column_width' => 5,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array (
			'key' => 'field_529f4aaa1515a',
			'label' => 'PCO#',
			'name' => 'pco',
			'type' => 'number',
			'column_width' => 10,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
/** /
		array (
			'key' => 'field_544695271c135',
			'label' => 'Location No',
			'name' => 'scope_no',
			'type' => 'number',
			'column_width' => 5,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
/**/
		array (
			'key' => 'field_529f4add1515b',
			'label' => 'Notes*',
			'name' => 'notes',
			'type' => 'text',
			'column_width' => '',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
		)
	);
	$classification_subfields = array();
	$classification_subfields[] = $labortypes_field;
	if ( $man_hours ) $classification_subfields[] = $mancount_field;
	$classification_subfields = array_merge($classification_subfields, $subfields);
	$dcrs_args = array (
		'id' => 'acf_dcr',
		'title' => 'DCRs',
		'fields' => array (
			array (
				'key' => 'field_529f431415148',
				'label' => 'Work Date',
				'name' => 'work_date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 1,
				'required' => (is_admin() ? 0 : 1),
			),
			array (
				'key' => 'field_529f43e71514a',
				'label' => 'Shift',
				'name' => 'shift',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
				'required' => (is_admin() ? 0 : 1),
			),
			array (
				'key' => 'field_536692bccaa2e',
				'label' => 'Were there any incidents on site today?',
				'name' => 'incidents_on_site',
				'type' => 'radio',
				'choices' => array (
					'No' => 'No',
					'Yes' => 'Yes',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				#'default_value' => 0,
				'layout' => 'horizontal',
				'required' => (is_admin() ? 0 : 1),
			),
			array (
				'key' => 'field_52b84a277cd3a',
				'label' => 'Company',
				'name' => 'company',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'em_companies',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
				'required' => (is_admin() ? 0 : 1),
			),
			array (
				'key' => 'field_52eac058b9c2d',
				'label' => 'Location',
				'name' => 'scope',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_52eac4task',
						'label' => 'Task Description',
						'name' => 'task',
						'type' => 'text',
						'column_width' => 30,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_52eac327b9c2e',
						'label' => $tier1,
						'name' => 'building',
						'type' => 'select',
						'column_width' => 10,
						'choices' => array (
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
					array (
						'key' => 'field_52eac405b9c2f',
						'label' => $tier2,
						'name' => 'floor',
						'type' => 'select',
						'column_width' => 10,
						'choices' => array (
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
/** /
					array (
						'key' => 'field_52eac4c7b9c30',
						'label' => $tier3,
						'name' => 'location',
						'type' => 'select',
						'column_width' => '10',
						'choices' => array (
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
/**/
					array (
						'key' => 'field_52eac4e0b9c31',
						'label' => 'Location / Subarea',
						'name' => 'scope',
						'type' => 'text',
						'column_width' => 50,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
				'required' => (is_admin() ? 0 : 1),
			),
/**/
			array (
				'key' => 'field_52a5567d33ebb',
				'label' => 'Other Notes',
				'name' => 'other_notes',
				'type' => 'textarea',
				'instructions' => '',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'formatting' => 'br',
				#'required' => (is_admin() ? 0 : 1),
			),
/**/
			array (
				'key' => 'field_529f5d25f8509',
				'label' => 'Backup',
				'name' => 'backup',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_529f5da2f850a',
						'label' => 'File',
						'name' => 'file',
						'type' => 'file',
						'column_width' => '',
						'save_format' => 'url',
						'library' => 'uploadedTo',
					),
				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add File',
			),
			array (
				'key' => 'field_529f44e21514e',
				'label' => 'Labor',
				'name' => '',
				'type' => 'message',
				'message' => '<hr class="divider divider-before" />
	<h2>Work Breakdown</h2>
	<hr class="divider divider-after" />',
			),
/** /
			array (
				'key' => 'field_529f480a1514f',
				'label' => 'Labor Breakdown',
				'name' => 'laborbd',
				'type' => 'radio',
				'choices' => array (
					'classification' => 'By Labor Classification',
					'employee' => 'By Employee Name',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'classification',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_529f487c15150',
				'label' => 'Employee Breakdown',
				'name' => 'employee_breakdown',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_529f480a1514f',
							'operator' => '==',
							'value' => 'employee',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_529f489d15151',
						'label' => 'Employee Name',
						'name' => 'employee_name',
						'type' => 'post_object',
						'column_width' => 25,
						'post_type' => array (
							0 => 'em_employees',
						),
						'taxonomy' => array (
							0 => 'all',
						),
						'allow_null' => 1,
						'multiple' => 0,
					),
					array (
						'key' => 'field_529f492a15152',
						'label' => 'Days Worked',
						'name' => 'days_worked',
						'type' => 'number',
						'column_width' => 5,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_529f495815153',
						'label' => 'PCO#',
						'name' => 'pco',
						'type' => 'number',
						'column_width' => 10,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_544695271c135',
						'label' => 'Location No',
						'name' => 'scope_no',
						'type' => 'number',
						'column_width' => 5,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_529f496b15154',
						'label' => 'Notes*',
						'name' => 'notes',
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
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Employee',
			),
/**/
			array (
				'key' => 'field_529f49f515157',
				'label' => 'Classification Breakdown (' . $dcr_labor_breakdown . ')',
				'name' => 'classification_breakdown',
				'type' => 'repeater',
/** /
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_529f480a1514f',
							'operator' => '==',
							'value' => 'classification',
						),
					),
					'allorany' => 'all',
				),
/**/
				'sub_fields' => $classification_subfields,
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Type',
				'required' => (is_admin() ? 0 : 1),
			),
			array (
				'key' => 'field_529f4c7337814',
				'label' => '*Notes',
				'name' => '',
				'type' => 'message',
				'message' => ( ! $man_hours ? 'Note: 8 hrs = 1 Man-day | 10 hrs = 1.25 Man-days | Etc.<br />' : '') . '<small>* Significant events, issues, site visitors, start/end time different from standard shift, etc.</small>',
			),
/** /
			array (
				'key' => 'field_529f4c7337813',
				'label' => 'Material Breakdown',
				'name' => '',
				'type' => 'message',
				'message' => '<hr class="divider divider-before" />
	<h2>Material Breakdown</h2>
	<hr class="divider divider-after" />',
			),
			array (
				'key' => 'field_529f4cf437814',
				'label' => 'Materials delivered today',
				'name' => 'materials',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_52b0080b04e2a',
						'label' => 'Name',
						'name' => 'name',
						'type' => 'post_object',
						'column_width' => 30,
						'post_type' => array (
							0 => 'em_materials',
						),
						'taxonomy' => array (
							0 => 'all',
						),
						'allow_null' => 1,
						'multiple' => 0,
					),
/** /
					array (
						'key' => 'field_52b00995de834',
						'label' => 'Unit of Measure',
						'name' => 'measure',
						'type' => 'text',
						'column_width' => '10',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_52b00962de832',
						'label' => 'Amount Used',
						'name' => 'amount_used',
						'type' => 'number',
						'column_width' => '15',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
/** /
					array (
						'key' => 'field_544695271c135',
						'label' => 'Location No',
						'name' => 'scope_no',
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
						'key' => 'field_52a5582333ebc',
						'label' => 'Notes',
						'name' => 'notes',
						'type' => 'text',
						'column_width' => 68,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Material',
			),
/**/
			array (
				'key' => 'field_52b86952c4bc3',
				'label' => 'Equipment Breakdown',
				'name' => '',
				'type' => 'message',
				'message' => '<hr class="divider divider-before" />
	<h2>Equipment Breakdown</h2>
	<hr class="divider divider-after" />',
			),
			array (
				'key' => 'field_52a5587233ebd',
				'label' => 'Equipment used today',
				'name' => 'equipment',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_52b00a85de839',
						'label' => 'Name',
						'name' => 'name',
						'type' => 'text',
						'column_width' => 30,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
/** /
					array (
						'key' => 'field_52b00a85de839',
						'label' => 'Name',
						'name' => 'name',
						'type' => 'post_object',
						'column_width' => 20,
						'post_type' => array (
							0 => 'em_equipment',
						),
						'taxonomy' => array (
							0 => 'all',
						),
						'allow_null' => 1,
						'multiple' => 0,
					),
/** /
					array (
						'key' => 'field_52b00anameother',
						'label' => 'Other',
						'name' => 'name_other',
						'type' => 'text',
						'column_width' => 20,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
/** /
					array (
						'key' => 'field_52b00ae7de83c',
						'label' => 'Unit of Measure',
						'name' => 'measure',
						'type' => 'text',
						'column_width' => '10',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_52b00ae7de83b',
						'label' => 'Amount Used',
						'name' => 'usage',
						'type' => 'number',
						'column_width' => '15',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
/** /
					array (
						'key' => 'field_544695271c135',
						'label' => 'Location No',
						'name' => 'scope_no',
						'type' => 'number',
						'column_width' => 5,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
/**/
					array (
						'key' => 'field_52a5587233ec1',
						'label' => 'Notes',
						'name' => 'notes',
						'type' => 'text',
						'column_width' => 70,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Equipment',
			),


			array (
				'key' => 'field_52b86mattitle',
				'label' => 'Material Delivered to Site',
				'name' => '',
				'type' => 'message',
				'message' => '<hr class="divider divider-before" />
	<h2>Material Delivered to Site</h2>
	<hr class="divider divider-after" />',
			),
			array (
				'key' => 'field_52a55matfield',
				'label' => 'Materials delivered today',
				'name' => 'material',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_52b0matname',
						'label' => 'Name',
						'name' => 'name',
						'type' => 'text',
						'column_width' => 30,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_52b0matqty',
						'label' => 'Quantity',
						'name' => 'qty',
						'type' => 'number',
						'column_width' => 10,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_52a55matnotes',
						'label' => 'Notes',
						'name' => 'notes',
						'type' => 'text',
						'column_width' => 60,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Material',
			),


			array (
				'key' => 'field_529f5a1754c79',
				'label' => 'Sign & Confirm',
				'name' => '',
				'type' => 'message',
				'required' => (is_admin() ? 0 : 1),
				'message' => '<hr class="divider divider-before" />
	<h2>Sign & Confirm</h2>
	<hr class="divider divider-after" />',
			),
/**/
			array (
				'key' => 'field_52b5a399248f4',
				'label' => 'Send to',
				'name' => 'turner_responsible',
				'type' => 'user',
				'role' => array (
					0 => 'editor',
					1 => 'administrator',
				),
				'field_type' => 'select',
				'allow_null' => 1,
				'required' => (is_admin() ? 0 : 1),
			),
/**/
			array (
				'key' => 'field_529f5b0c54c7b',
				'label' => 'Signature',
				'name' => 'em_tickets_signature',
				'type' => 'signature',
				'required' => 0,#(is_admin() ? 0 : 1),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'em_dcr2',
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
		'menu_order' => 1030,
	);
	register_field_group( $dcrs_args );
}