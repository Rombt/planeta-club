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

   <?php // get_template_part('template-parts/components/debug-grid'); ?>

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
            <?php if (has_custom_logo()) : ?>
            <div class="wrap-img">
               <?php the_custom_logo(); ?>
            </div>
            <?php endif ?>
            <div class="rmbt-container rmbt-header-bottom__container">
               <div class="rmbt-header-bottom__row">
                  <div class="rmbt-header-bottom__col">

                     <?php if (has_nav_menu('header_nav')) { ?>
                     <div class="cont-horizont-menu">

                        <?php wp_nav_menu(
								array(
									'theme_location' => 'header_nav',
									'container' => 'nav',
								)
							);?>
                     </div>
                     <?php } ?>


                  </div>
               </div>
            </div>
            <?php get_template_part('searchform'); ?>
         </div>



      </header>