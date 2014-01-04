<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('BASIC SETTINGS', 'options_check'),
		'type' => 'heading');

	// MAIN BACKGROUND IMAGE
	$options[] = array(
		'name' =>  __('Background Image', 'options_check'),
		'desc' => __('background Image', 'options_check'),
		'id' => 'section_one_image',
		'std' => $background_defaults,
		'type' => 'background' );

	// DESCRIPTION FOR SECTION 1
	$options[] = array(
		'name' => __('Section 1 Description', 'options_check'),
		'desc' => __('Main Description', 'options_check'),
		'id' => 'section_one_desc',
		'std' => 'Description is going to come here',
		'type' => 'textarea');

	// SECTION TWO TITLE
	$options[] = array(
		'name' => __('Section Two Title', 'options_check'),
		'desc' => __('Second section title', 'options_check'),
		'id' => 'section_two_title',
		'std' => 'Section two title',
		'type' => 'text');

	$options[] = array(
		'name' => __('Section two sub-title', 'options_check'),
		'desc' => __('Sub Title for section two', 'options_check'),
		'id' => 'section_two_sub',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' =>  __('Section Two Featured Image', 'options_check'),
		'desc' => __('Section two main image', 'options_check'),
		'id' => 'section_two_image',
		'std' => $background_defaults,
		'type' => 'background' );

	$options[] = array(
		'name' => __('SPECIFICATIONS', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' =>  __('Spec One Image', 'options_check'),
		'desc' => __('Specification one image', 'options_check'),
		'id' => 'specification_one_image',
		'std' => $background_defaults,
		'type' => 'background' );

	$options[] = array(
		'name' => __('Spec one desc ', 'options_check'),
		'desc' => __('Specification one description', 'options_check'),
		'id' => 'specification_one_desc',
		'std' => 'Default Value',
		'type' => 'textarea');


	$options[] = array(
		'name' =>  __('Spec two image', 'options_check'),
		'desc' => __('Specification two image', 'options_check'),
		'id' => 'specification_two_image',
		'std' => $background_defaults,
		'type' => 'background' );

	$options[] = array(
		'name' => __('Spec two desc', 'options_check'),
		'desc' => __('Specification two description', 'options_check'),
		'id' => 'specification_two_desc',
		'std' => 'Default Value',
		'type' => 'textarea');


	$options[] = array(
		'name' =>  __('Spec three image', 'options_check'),
		'desc' => __('Specification three image', 'options_check'),
		'id' => 'specification_three_image',
		'std' => $background_defaults,
		'type' => 'background' );

	$options[] = array(
		'name' => __('Spec three desc', 'options_check'),
		'desc' => __('Specification three description', 'options_check'),
		'id' => 'specification_three_desc',
		'std' => 'Default Value',
		'type' => 'textarea');


	$options[] = array(
		'name' =>  __('Spec four image', 'options_check'),
		'desc' => __('Specification four image', 'options_check'),
		'id' => 'specification_four_image',
		'std' => $background_defaults,
		'type' => 'background' );

	$options[] = array(
		'name' => __('Spec four desc', 'options_check'),
		'desc' => __('Specification four description', 'options_check'),
		'id' => 'specification_four_desc',
		'std' => 'Default Value',
		'type' => 'textarea');

	$options[] = array(
		'name' =>  __('Pricing Section Image', 'options_check'),
		'desc' => __('Pricing Section Image', 'options_check'),
		'id' => 'pricing_section_image',
		'std' => $background_defaults,
		'type' => 'background' );



	$options[] = array(
		'name' => __('PRICING TABLE', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Basic Cost', 'options_check'),
		'desc' => __('Basic Cost in Numbers', 'options_check'),
		'id' => 'pricing_basic_cost',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Input Text', 'options_check'),
		'desc' => __('Basic Cost description', 'options_check'),
		'id' => 'pricing_basic_desc',
		'std' => 'Default Value',
		'type' => 'textarea');


	$options[] = array(
		'name' => __('Input Text', 'options_check'),
		'desc' => __('super Cost in Numbers', 'options_check'),
		'id' => 'pricing_super_cost',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Input Text', 'options_check'),
		'desc' => __('super Cost description', 'options_check'),
		'id' => 'pricing_super_desc',
		'std' => 'Default Value',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Input Text', 'options_check'),
		'desc' => __('premium Cost in Numbers', 'options_check'),
		'id' => 'pricing_premium_cost',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Input Text', 'options_check'),
		'desc' => __('premium Cost description', 'options_check'),
		'id' => 'pricing_premium_desc',
		'std' => 'Default Value',
		'type' => 'textarea');

	return $options;
}
