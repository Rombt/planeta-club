<?php
defined('ABSPATH') || exit;


// Header sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Header settings', 'rombt_pc'),
		'id' => 'settings_header',
		'desc' => esc_html__('Settings header site', 'rombt_pc'),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			array(
				'id' => 'search_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Search icon', 'rombt_pc'),
				'compiler' => 'true',
				'preview_size' => 'full',
			),
			// array(
			// 	'id' => 'modal_menu_location',
			// 	'type' => 'button_set',
			// 	'title' => esc_html__('Location for modal drop-down menu', 'rombt_pc'),
			// 	//Must provide key => value pairs for options
			// 	'options' => array(
			// 		'1' => 'Viewport',
			// 		'2' => 'Heder menu'
			// 	),
			// 	'default' => '1',
			// ),
			// array(
			// 	'id' => 'modal_menu_side',
			// 	'type' => 'button_set',
			// 	'title' => __('Side for modal drop-down menu', 'rombt_pc'),
			// 	'desc' => __('Your modal menu will be from the indicated side ', 'rombt_pcr'),
			// 	//Must provide key => value pairs for options
			// 	'options' => array(
			// 		'1' => 'left',
			// 		'2' => 'right'
			// 	),
			// 	'default' => '1',
			// ),
		)
	)
);