<?php
defined('ABSPATH') || exit;


// Menu page sections start
Redux::set_section(
	$opt_name,
	array(
		'id' => 'settings_contacts',
		'title' => esc_html__('Contacts settings', 'rombt_pc'),
		'desc' => esc_html__('Contacts', 'rombt_pc'),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			array(
				'id' => 'rmbt-address-1',
				'type' => 'textarea',
				'title' => esc_html__('Enter Your first Address', 'rombt_pc'),
				'default' => 'м. Ірпінь, вул. Грибоєдова, 2 БЦ “Домінант”',
			),
			array(
				'id' => 'rmbt-address-2',
				'type' => 'textarea',
				'title' => esc_html__('Enter Your second Address', 'rombt_pc'),
				'default' => 'м. Ірпінь, вул.Г.Сковороди 11/4 Синергія 3',
			),

			//First Manager section start -----------------------------------
			array(
				'id' => 'rmbt-manager-1-section-start',
				'type' => 'section',
				'title' => esc_html__('First Manager contacts', 'rombt_pc'),
				'indent' => true
			),

			array(
				'id' => 'rmbt-manager-1-name',
				'type' => 'text',
				'title' => esc_html__('Add first manager name ', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-1-phone',
				'type' => 'text',
				'title' => esc_html__('Add first manager phone number', 'rombt_pc'),
				'default' => '+380983905737',
			),
			array(
				'id' => 'rmbt-manager-1-email',
				'type' => 'text',
				'title' => esc_html__('Add first manager email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-manager-1-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//First Manager section end	-----------------------------------
			// 
			//Second  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-2-section-start',
				'type' => 'section',
				'title' => esc_html__('Second  Manager contacts', 'rombt_pc'),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-2-name',
				'type' => 'text',
				'title' => esc_html__('Add second manager name', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-2-phone',
				'type' => 'text',
				'title' => esc_html__('Add second manager phone number', 'rombt_pc'),
				'default' => '+380634748804',
			),
			array(
				'id' => 'rmbt-manager-2-email',
				'type' => 'text',
				'title' => esc_html__('Add second manager email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-manager-2-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//Second  Manager section end
			//
			//Third  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-3-section-start',
				'type' => 'section',
				'title' => esc_html__('Third  Manager contacts', 'rombt_pc'),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-3-name',
				'type' => 'text',
				'title' => esc_html__('Add third manager name', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-3-phone',
				'type' => 'text',
				'title' => esc_html__('Add third manager phone number', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-3-email',
				'type' => 'text',
				'title' => esc_html__('AAdd third manager email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-manager-3-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//Third  Manager section end		-----------------------------------
			//
			//Fourth  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-4-section-start',
				'type' => 'section',
				'title' => esc_html__('Fourth  Manager contacts', 'rombt_pc'),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-4-name',
				'type' => 'text',
				'title' => esc_html__('Add fourth manager name', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-4-phone',
				'type' => 'text',
				'title' => esc_html__('Add fourth manager phone number', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-4-email',
				'type' => 'text',
				'title' => esc_html__('Add fourth manager email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-manager-4-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//Fourth  Manager section end		-----------------------------------
			//
			//
			//Fifth  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-5-section-start',
				'type' => 'section',
				'title' => esc_html__('Fifth  Manager contacts', 'rombt_pc'),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-5-name',
				'type' => 'text',
				'title' => esc_html__('Add fifth manager name', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-5-phone',
				'type' => 'text',
				'title' => esc_html__('Add fifth manager phone number', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-5-email',
				'type' => 'text',
				'title' => esc_html__('Add fifth manager email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-manager-5-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//Fifth  Manager section end		-----------------------------------
			//
			//
			//Sixth  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-6-section-start',
				'type' => 'section',
				'title' => esc_html__('Sixth  Manager contacts', 'rombt_pc'),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-6-name',
				'type' => 'text',
				'title' => esc_html__('Add sixth manager name', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-6-phone',
				'type' => 'text',
				'title' => esc_html__('Add sixth manager phone number', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-manager-6-email',
				'type' => 'text',
				'title' => esc_html__('Add sixth manager email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-manager-6-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//Sixth  Manager section end		-----------------------------------
			//

			array(
				'id' => 'rmbt-name-email-1-section-start',
				'type' => 'section',
				'title' => esc_html__('Email 1', 'rombt_pc'),
				'subtitle' => esc_html__('Enter email and set his name', 'rombt_pc'),
				'indent' => true
			),

			array(
				'id' => 'rmbt-name-email-1',
				'type' => 'text',
				'title' => esc_html__('Add name of your first email', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-email-1',
				'type' => 'text',
				'title' => esc_html__('Add your first email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-email-1-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//email_numbers 1 section end
			//email 2 section start
			array(
				'id' => 'rmbt-name-email-2-section-start',
				'type' => 'section',
				'title' => esc_html__('Email 2', 'rombt_pc'),
				'subtitle' => esc_html__('Enter email and set his name', 'rombt_pc'),
				'indent' => true
			),

			array(
				'id' => 'rmbt-name-email-2',
				'type' => 'text',
				'title' => esc_html__('Add name of your second email', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-email-2',
				'type' => 'text',
				'title' => esc_html__('Add your second email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-email-2-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//email_numbers 2 section end
			//email 3 section start
			array(
				'id' => 'rmbt-name-email-3-section-start',
				'type' => 'section',
				'title' => esc_html__('Email 3', 'rombt_pc'),
				'subtitle' => esc_html__('Enter email and set his name', 'rombt_pc'),
				'indent' => true
			),

			array(
				'id' => 'rmbt-name-email-3',
				'type' => 'text',
				'title' => esc_html__('Add name of your third email', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-email-3',
				'type' => 'text',
				'title' => esc_html__('Add your third email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-email-3-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//email_numbers 3 section end
			//email 4 section start
			array(
				'id' => 'rmbt-name-email-4-section-start',
				'type' => 'section',
				'title' => esc_html__('Email 4', 'rombt_pc'),
				'subtitle' => esc_html__('Enter email and set his name', 'rombt_pc'),
				'indent' => true
			),

			array(
				'id' => 'rmbt-name-email-4',
				'type' => 'text',
				'title' => esc_html__('Add name of your fourth email', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-email-4',
				'type' => 'text',
				'title' => esc_html__('Add your fourth email', 'rombt_pc'),
			),

			array(
				'id'     => 'rmbt-email-4-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//email_numbers 4 section end


		),
	)
);