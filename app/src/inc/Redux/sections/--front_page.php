<?php

defined('ABSPATH') || exit;


// Front page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Front page', 'rombt_pc'),
		'id' => 'settings_front-page',
		'desc' => esc_html__('Front page settings', 'rombt_pc'),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-front',
		'fields' => array(

			array(
				'id' => 'rmbt-no-img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('This picture will show if main picture is absent', 'rombt_pc'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'rmbt-no-img_alt',
				'type' => 'text',
				'title' => esc_html__('Description for picture than is absent', 'rombt_pc'),
			),

			array(
				'id' => 'rmbt-news-block_section-title',
				'type' => 'text',
				'title' => esc_html__('Title of News Block', 'rombt_pc'),
				'default' => esc_html__('Останні новини', 'rombt_pc'),
			),

			/*------------------ main_slider_screen accordion ------------------*/
			array(
				'id' => 'main_slider_screen-start',
				'type' => 'accordion',
				'title' => esc_html__('Title Section', 'rombt_pc'),
				'subtitle' => 'Add your content to the section \'Title\'',
				'position' => 'start',
			),
			array(
				'id' => 'main_slider_screen-gallery',
				'type' => 'gallery',
				'title' => esc_html__('Add/Edit Gallery on the main screen ', 'rombt_pc'),
			),
			array(
				'id' => 'front_page_title',
				'type' => 'text',
				'title' => esc_html__('Front page title', 'rombt_pc'),
				'default' => __(wp_kses('Український виробник', 'post'), 'rombt_pc'),
			),
			array(
				'id' => 'front_page_subtitle',
				'type' => 'text',
				'title' => esc_html__('Front page title', 'rombt_pc'),
				'default' => __(wp_kses('хлібопекарського і кондитерського обладнання', 'post'), 'rombt_pc'),
			),
			array(
				'id' => 'front_page_slogan',
				'type' => 'text',
				'title' => esc_html__('Front page subtitle', 'rombt_pc'),
				'default' => esc_html__('Завжди надійний постачальник!', 'rombt_pc'),
			),
			array(
				'id' => 'button_title',
				'type' => 'text',
				'title' => esc_html__('Title of Main Screen Button', 'rombt_pc'),
				'default' => esc_html__('Зв`язатись з нами', 'rombt_pc'),
			),
			array(
				'id' => 'button_href',
				'type' => 'text',
				'title' => esc_html__('Link for button', 'rombt_pc'),
				'default' => esc_html__('#', 'rombt_pc'),
			),
			array(
				'id' => 'background_picture',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture for Background', 'rombt_pc'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/prapor-ukrainy.jpg'
				),
			),
			array(
				'id' => 'main_slider_screen-end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ /main_slider_screen accordion ------------------*/

			/*------------------ Introduction accordion ------------------*/
			array(
				'id' => 'introduction-start',
				'type' => 'accordion',
				'title' => esc_html__('Introduction Section', 'rombt_pc'),
				'subtitle' => 'Add your content to the section \'Introduction\'',
				'position' => 'start',
			),
			array(
				'id' => 'introduction_section-title',
				'type' => 'text',
				'title' => esc_html__('Introduction Section title', 'rombt_pc'),
				'default' => esc_html__('Запрошуємо до нас', 'rombt_pc'),
			),
			array(
				'id' => 'introduction_section-text',
				'type' => 'textarea',
				'title' => esc_html__('Introduction Section Text', 'rombt_pc'),
			),
			array(
				'id' => 'introduction_first_block-title',
				'type' => 'text',
				'title' => esc_html__('Front page title', 'rombt_pc'),
				'default' => esc_html__('Виробляємо', 'rombt_pc'),
			),
			array(
				'id' => 'introduction_first_block-text',
				'type' => 'textarea',
				'title' => esc_html__('Introduction First Block Text', 'rombt_pc'),
			),
			array(
				'id' => 'introduction_second_block-title',
				'type' => 'text',
				'title' => esc_html__('Front page title', 'rombt_pc'),
				'default' => esc_html__('Ремонтуємо', 'rombt_pc'),
			),

			array(
				'id' => 'introduction_second_block-text',
				'type' => 'textarea',
				'title' => esc_html__('Introduction Second Block Text', 'rombt_pc'),
			),

			array(
				'id' => 'introduction_image',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture for Introduction Block', 'rombt_pc'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'introduction_image_alt',
				'type' => 'text',
				'title' => esc_html__('Description of introduction image', 'rombt_pc'),
			),
			array(
				'id' => 'introduction-end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ /Introduction accordion ------------------*/


			/*------------------ Best Sellers accordion ------------------*/
			array(
				'id' => 'best-sellers_start',
				'type' => 'accordion',
				'title' => esc_html__('Best Sellers', 'rombt_pc'),
				'subtitle' => 'Add your content to the section \'Best Sellers\'',
				'position' => 'start',
			),
			array(
				'id' => 'best-sellers_section-title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers Section title',
					'rombt_pc'
				),
				'default' => esc_html__('Хіти продажу', 'rombt_pc'),
			),
			array(
				'id' => 'best-sellers_section_text',
				'type' => 'textarea',
				'title' => esc_html__('best-sellers Section Text', 'rombt_pc'),
			),
			/*------------------  the start of image block -----------------*/
			array(
				'id' => 'best-sellers-goods-one_title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers of Goods number one',
					'rombt_pc'
				),
				'default' => esc_html__('Ротаційна піч Impex Rotor (на пелетах)', 'rombt_pc'),
			),
			array(
				'id' => 'best-sellers_image-one',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture of Best Sellers of Goods number one', 'rombt_pc'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'best-sellers_image-one_alt',
				'type' => 'text',
				'title' => esc_html__('Description of image', 'rombt_pc'),
			),
			array(
				'id' => 'best-sellers_href-one',
				'type' => 'text',
				'title' => esc_html__('Link To Page Goods', 'rombt_pc'),
			),

			/*------------------  the end of image block -----------------*/
			/*------------------  the start of image block -----------------*/

			array(
				'id' => 'best-sellers-goods-two_title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers of Goods number two',
					'rombt_pc'
				),
				'default' => esc_html__('Відсадочна машина Impex Drop-600', 'rombt_pc'),
			),

			array(
				'id' => 'best-sellers_image-two',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture of Best Sellers of Goods number two', 'rombt_pc'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),

			array(
				'id' => 'best-sellers_image-two_alt',
				'type' => 'text',
				'title' => esc_html__('Description of image', 'rombt_pc'),
			),
			array(
				'id' => 'best-sellers_href-two',
				'type' => 'text',
				'title' => esc_html__('Link To Page Goods', 'rombt_pc'),
			),
			/*------------------  the end of image block -----------------*/
			/*------------------  the start of image block -----------------*/

			array(
				'id' => 'best-sellers-goods-three_title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers of Goods number three',
					'rombt_pc'
				),
				'default' => esc_html__('Глазурувальна машина Impex EM-300', 'rombt_pc'),
			),

			array(
				'id' => 'best-sellers_image-three',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture of Best Sellers of Goods number three', 'rombt_pc'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'best-sellers_image-three_alt',
				'type' => 'text',
				'title' => esc_html__('Description of image', 'rombt_pc'),
			),
			array(
				'id' => 'best-sellers_href-three',
				'type' => 'text',
				'title' => esc_html__('Link To Page Goods', 'rombt_pc'),
			),
			/*------------------  the end of image block -----------------*/

			array(
				'id' => 'best-sellers_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ /Best Sellers accordion ------------------*/


			/*------------------ the start benefits-block accordion ------------------*/
			array(
				'id' => 'benefits-block_start',
				'type' => 'accordion',
				'title' => esc_html__('Benefit section', 'rombt_pc'),
				'subtitle' => 'Add your content to the section \'benefits-block\'',
				'position' => 'start',
			),
			array(
				'id' => 'rmbt-benefits-block_section-title',
				'type' => 'text',
				'title' => esc_html__('benefits-block Section Title', 'rombt_pc'),
				'default' => esc_html__('', 'rombt_pc'),
			),
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-1',
				'type' => 'text',
				'title' => esc_html__('Title of first article', 'rombt_pc'),
				'default' => esc_html__('', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-1',
				'type' => 'textarea',
				'title' => esc_html__('Text of first article', 'rombt_pc'),
			),
			/*------------------  the end of first article block -----------------*/
			/*------------------  the start of second article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-2',
				'type' => 'text',
				'title' => esc_html__('Title of second article', 'rombt_pc'),
				'default' => esc_html__('', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-2',
				'type' => 'textarea',
				'title' => esc_html__('Text of second article', 'rombt_pc'),
			),
			/*------------------  the end of second article block -----------------*/
			/*------------------  the start of third article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-3',
				'type' => 'text',
				'title' => esc_html__('Title of third article', 'rombt_pc'),
				'default' => esc_html__('', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-3',
				'type' => 'textarea',
				'title' => esc_html__('Text of third article', 'rombt_pc'),
			),
			/*------------------  the end of third article block -----------------*/
			/*------------------  the start of fourth article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-4',
				'type' => 'text',
				'title' => esc_html__('Title of fourth article', 'rombt_pc'),
				'default' => esc_html__('', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-4',
				'type' => 'textarea',
				'title' => esc_html__('Text of fourth article', 'rombt_pc'),
			),
			/*------------------  the end of fourth article block -----------------*/
			array(
				'id' => 'rmbt-benefits-bg-picture_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Picture for benefits-bg-picture article', 'rombt_pc'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'rmbt-benefits-bg-picture_img-alt',
				'type' => 'text',
				'title' => esc_html__('Image description for benefits-bg-picture', 'rombt_pc'),
				'default' => esc_html__('', 'rombt_pc'),
			),
			array(
				'id' => 'benefits-block_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ the end benefits-block accordion ------------------*/


			/*------------------ the start facts-block accordion ------------------*/
			array(
				'id' => 'facts-block_start',
				'type' => 'accordion',
				'title' => esc_html__('Facts Block Section', 'rombt_pc'),
				'subtitle' => 'Add your content to the section \'Facts Block\'',
				'position' => 'start',
			),
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-facts-block_article-title-1',
				'type' => 'text',
				'title' => esc_html__('Title of first article', 'rombt_pc'),
				'default' => esc_html__('партнерів', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-facts-block_article-text-1',
				'type' => 'text',
				'title' => esc_html__('Text of first article', 'rombt_pc'),
			),
			/*------------------  the end of first article block -----------------*/
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-facts-block_article-title-2',
				'type' => 'text',
				'title' => esc_html__('Title of first article', 'rombt_pc'),
				'default' => esc_html__('проектів', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-facts-block_article-text-2',
				'type' => 'text',
				'title' => esc_html__('Text of first article', 'rombt_pc'),
			),
			/*------------------  the end of first article block -----------------*/
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-facts-block_article-title-3',
				'type' => 'text',
				'title' => esc_html__('Title of first article', 'rombt_pc'),
				'default' => esc_html__('співробітників', 'rombt_pc'),
			),
			array(
				'id' => 'rmbt-facts-block_article-text-3',
				'type' => 'text',
				'title' => esc_html__('Text of first article', 'rombt_pc'),
			),
			/*------------------  the end of first article block -----------------*/
			array(
				'id' => 'facts-block_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ the end facts-block accordion ------------------*/


			/*------------------ the start  accordion ------------------*/
			array(
				'id' => 'clients-portfolio_start',
				'type' => 'accordion',
				'title' => esc_html__('Clients Portfolio Section', 'rombt_pc'),
				'subtitle' => 'Add your content to the section \'Clients Portfolio\'',
				'position' => 'start',
			),

			array(
				'id' => 'clients-portfolio_gallery',
				'type' => 'gallery',
				'title' => esc_html__('Add/Edit Gallery on the main screen ', 'rombt_pc'),
			),

			array(
				'id' => 'clients-portfolio_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ the end  accordion ------------------*/














			// /*------------------ the start benefits-block accordion ------------------*/
			// array(
			// 	'id' => 'benefits-block_start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('benefits-block section', 'rombt_pc'),
			// 	'subtitle' => 'Add your content to the section \'benefits-block\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'rmbt-benefits-block_section-title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('benefits-block Section Title', 'rombt_pc'),
			// 	'default' => esc_html__('', 'rombt_pc'),
			// ),
			// /*------------------  the start of first article block-----------------*/
			// array(
			// 	'id' => 'rmbt-benefits-block_article-title-1',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Title of first article', 'rombt_pc'),
			// 	'default' => esc_html__('', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'rmbt-benefits-block_article-text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Text of first article', 'rombt_pc'),
			// ),
			// /*------------------  the end of first article block -----------------*/
			// array(
			// 	'id' => 'benefits-block_end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),
			// /*------------------ the end benefits-block accordion ------------------*/








			// array(
			// 	'id' => 'front_page_slogan',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page slogan', 'rombt_pc'),
			// 	'default' => esc_html__('Explore food Menu'),
			// ),
			// array(
			// 	'id' => 'front_page_slogan_label',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Front Page label', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/exlore-food-menu.png'
			// 	),
			// ),



			// array(
			// 	'id' => 'about-section-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('About Section', 'rombt_pc'),
			// 	'subtitle' => 'Add your content to the section \'About\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'about_section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Section Title', 'rombt_pc'),
			// 	'default' => esc_html__('About Restaurant ', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'about_section_text',
			// 	'type' => 'textarea',
			// 	'title' => esc_html__('About Section Text', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'about_section_button_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Button Title', 'rombt_pc'),
			// 	'default' => esc_html__('READ MORE', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'about_section_button_href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Button link', 'rombt_pc'),
			// 	'default' => get_front_url() . "/about/",
			// ),
			// array(
			// 	'id' => 'about_section_img_1',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 1', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_2',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 2', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_3',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 3', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_4',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 4', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_button',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Read Revie Button', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/orang-sercle.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_icon',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Read Revie Icon', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_reviews.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Read Revie Text', 'rombt_pc'),
			// 	'default' => __(wp_kses('READ <p>REVIEWS</p>', array('p' => array())), 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'front_delivery_icon',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Front Delivery Icon', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_phone.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'front_delivery_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front Delivery Text', 'rombt_pc'),
			// 	'default' => __(wp_kses('CALL US NOW FOR <p>FRONT DELIVERY</p>', array('p' => array())), 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'about-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'today-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Today Section', 'rombt_pc'),
			// 	'subtitle' => 'Add your content to the section \'Today\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'today_section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page title', 'rombt_pc'),
			// 	'default' => esc_html__('Today Special', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'today-gallery',
			// 	'type' => 'gallery',
			// 	'title' => esc_html__('Add/Edit Today Gallery', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'today_section_footer_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Footer Text', 'rombt_pc'),
			// 	'default' => __(wp_kses('front <p> delivery </p>', array('p' => array())), 'rombt_pc'),
			// ),

			// array(
			// 	'id' => 'today-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'restaurant_menu-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Restaurant Menu', 'rombt_pc'),
			// 	'subtitle' => 'Add your content to the section \'Restaurant Menu\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Section Title', 'rombt_pc'),
			// 	'default' => esc_html__('Food Menu', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_button_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Button Title', 'rombt_pc'),
			// 	'default' => esc_html__('Explor food menu', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_button_href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Button link', 'rombt_pc'),
			// 	'default' => get_front_url() . "/food-menu-items/",
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_1',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag right', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_311x311.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_2',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag left', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_267x414.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_3',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag down', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_241x241.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_icon_first_item_menu',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Icon of the first menu item', 'rombt_pc'),
			// 	'subtitle' => esc_html__('Set if this item is for all food categories', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_all.png'
			// 	),
			// ),

			// array(
			// 	'id' => 'restaurant_menu-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),


			// array(
			// 	'id' => 'clients-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Clients section', 'rombt_pc'),
			// 	'subtitle' => 'Add your content to the section \'Clients Menu\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'clients-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Clients menu section title', 'rombt_pc'),
			// 	'default' => esc_html__('Happy Clients', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'clients-section_background_img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Background Img', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/background-clients-block.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'clients-section_avatar_default',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Default avatar of client', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'thumbnail',
			// 	'default' => array(
			// 		'url' => '/assets/img/icons/sprite.svg#avatar_default'
			// 	),
			// ),

			// array(
			// 	'id' => 'clients-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'reserve-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Reserve section', 'rombt_pc'),
			// 	'subtitle' => 'Add your content to the section \'Reserve Menu\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'reserve-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section title', 'rombt_pc'),
			// 	'default' => esc_html__('Reserve your table', 'rombt_pc'),
			// ),

			// array(
			// 	'id' => 'reserve-section_background_img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Reserve Section Img', 'rombt_pc'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_559x334.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'reserve-section_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section title', 'rombt_pc'),
			// 	'default' => esc_html__(wp_kses('<span>for a reservation</span>', 'rombt_pc')),
			// ),
			// array(
			// 	'id' => 'reserve-section_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section text', 'rombt_pc'),
			// 	'default' => esc_html__(wp_kses('You can also call <span>for a reservation</span>', 'rombt_pc')),
			// ),
			// array(
			// 	'id' => 'reserve-section_button-title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section button title', 'rombt_pc'),
			// 	'default' => esc_html__('Make reservation', 'rombt_pc'),
			// ),
			// array(
			// 	'id' => 'reserve-section_button-href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section button href', 'rombt_pc'),
			// 	'default' => esc_url('#'),
			// ),

			// array(
			// 	'id' => 'reserve-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),
		),
	),
);
