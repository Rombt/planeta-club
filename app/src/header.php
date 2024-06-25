<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>

   <?php  get_template_part('template-parts/components/debug-grid'); ?>

   <div class="rmbt-page-wrap">



      <header class="main-header">
         <div class="rmbt-full-width rmbt-header-top">
            <div class="rmbt-container rmbt-header-top__container">
               <div class="rmbt-header-top__row">
                  <div class="rmbt-header-top__col-left">
                     <span>
                        <svg>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_1">
                           </use>
                        </svg>
                        <?php echo rmbt_redux_field_to_ul('rmbt-manager-1-phone', 'tel', '', ' '); ?>
                     </span>
                     <span>
                        <svg>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_1">
                           </use>
                        </svg>
                        <?php echo rmbt_redux_field_to_ul('rmbt-manager-2-phone'); ?>
                     </span>
                  </div>
                  <div class="rmbt-header-top__col-right">
                     <span>
                        <svg>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#map-point_1">
                           </use>
                        </svg>
                        <?php echo rmbt_get_redux_field('rmbt-address-1'); ?>
                     </span>
                     <span>
                        <svg>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#map-point_1">
                           </use>
                        </svg>
                        <?php echo rmbt_get_redux_field('rmbt-address-2'); ?>
                     </span>
                  </div>
               </div>
            </div>
            <nav class="language language__menu">
               <ul id="" class="menu">
                  <li id="menu-item-28476" class="">
                     <a href="#">UA</a>
                  </li>
                  <li id="" class="">
                     <a href="#">RU</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="rmbt-full-width rmbt-header-bottom">
            <div class="rmbt-container rmbt-header-bottom-container">
               <div class="rmbt-header-bottom__row">
                  <div class="rmbt-header-bottom__col">
                  </div>
               </div>
            </div>
         </div>

      </header>



      <!-- <div class="wrapper-section">
         <div class="rmbt-full-width rmbt-header-full-width">
            <div class="rmbt-header-top-line">
               <div class="rmbt-header-top-line__col-left">
                  <?php echo rmbt_redux_field_to_ul('rmbt-manager-1-phone', 'tel', '', ','); ?>
                  <?php echo rmbt_redux_field_to_ul('rmbt-manager-2-phone'); ?>
               </div>
               <div class="rmbt-header-top-line__col-right">
                  <?php echo rmbt_get_redux_field('rmbt-address-1'); ?>
                  <?php echo rmbt_get_redux_field('rmbt-address-2'); ?>
               </div>
               <nav class="language language__menu">
                  <ul id="menu-mova-ua" class="menu">
                     <li id="menu-item-28476" class="">
                        <a href="#">UA</a>
                     </li>
                     <li id="menu-item-28476-ru" class="">
                        <a href="#">RU</a>
                     </li>
                  </ul>
               </nav>
            </div>
            <header class="rmbt-container rmbt-header">

               <div class="rmbt-header__row rmbt-bottom-line">
                  <div class="rmbt-bottom-line__col-nav">
                  </div>
               </div>
            </header>
         </div>
      </div> -->






      <?php
		// для стандартного WP виджета поиск файл searchform.php должен находится в корне темы
		// для работоспособности поиска в целом searchform.php может быть где угодно
		get_template_part('searchform');
		?>