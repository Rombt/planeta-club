<?php

defined('ABSPATH') || exit;


// Front page sections start
Redux::set_section(
   $opt_name,
   array(
      'title' => esc_html__('Search block', 'rombt_pc'),
      'id' => 'settings_search-block',
      'desc' => esc_html__('Search block settings', 'rombt_pc'),
      'customizer_width' => '450',
      // 'subsection' => true,
      // 'icon'             => 'el el-front',
      'fields' => array(

         array(
            'id' => 'search-card-1_title',
            'type' => 'text',
            'title' => esc_html__('Title of Search first card', 'rombt_pc'),
            'default' => esc_html__('Пошук по обладнанню', 'rombt_pc'),
         ),
         array(
            'id' => 'search-card-1_text',
            'type' => 'text',
            'title' => esc_html__('Title of Search first card', 'rombt_pc'),
            'default' => esc_html__('Дивитися', 'rombt_pc'),
         ),
         array(
            'id' => 'search-card-1_link',
            'type' => 'text',
            'title' => esc_html__('Link for Search first card', 'rombt_pc'),
         ),
         array(
            'id' => 'rmbt-search-card_img-id-1',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture for search-card article', 'rombt_pc'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/search-card-1.jpg'
            ),
         ),
         array(
            'id' => 'rmbt-search-card_img-alt-1',
            'type' => 'text',
            'title' => esc_html__('Image description for search-card', 'rombt_pc'),
            'default' => esc_html__('search-card-1', 'rombt_pc'),
         ),

         array(
            'id' => 'search-card-2_title',
            'type' => 'text',
            'title' => esc_html__('Title of Search second card', 'rombt_pc'),
            'default' => esc_html__('Пошук по виробам', 'rombt_pc'),
         ),
         array(
            'id' => 'search-card-2_text',
            'type' => 'text',
            'title' => esc_html__('Title of Search first card', 'rombt_pc'),
            'default' => esc_html__('Дивитися', 'rombt_pc'),
         ),

         array(
            'id' => 'rmbt-search-card_img-id-2',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture for search-card article', 'rombt_pc'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/search-card-2.jpg'
            ),
         ),
         array(
            'id' => 'rmbt-search-card_img-alt-2',
            'type' => 'text',
            'title' => esc_html__('Image description for search-card', 'rombt_pc'),
            'default' => esc_html__('search-card-2', 'rombt_pc'),
         ),

      ),
   ),
);
