<div class="wrapper-section">
   <div class="rmbt-full-width rmbt-hero-block-full-width">
      <section class="rmbt-container rmbt-hero-block">
         <h2><?php echo rmbt_get_redux_field('rmbt-hero-block_section-title') ?></h2>
         <!-- <?php // get_template_part('template-parts/components/title', 'page', ['title' => rmbt_get_redux_field('rmbt-hero-block_section-title')]); ?> -->
         <p><?php echo rmbt_get_redux_field('rmbt-hero-block_section-text') ?></p>
         <div class="rmbt-hero-block__row">
            <article class="rmbt-hero-block__col">
               <header>
                  <h3><?php echo rmbt_get_redux_field('rmbt-hero-block_article-title-1') ?></h3>
               </header>
               <div class="rmbt-hero-block__article-body">
                  <div class="wrap-img rmbt-hero-block__img">
                     <?php rmbt_redux_img('rmbt-hero-block_article-img-id-1', 'rmbt-hero-block_article-img-alt-1') ?>
                  </div>
                  <div class="rmbt-hero-block__article-text">
                     <?php echo rmbt_get_redux_field('rmbt-hero-block_article-text-1') ?>
                  </div>
               </div>
               <footer>
                  <a href="#">
                     read more
                     <svg>
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#"></use>
                     </svg>
                  </a>
               </footer>
            </article>
         </div>
      </section>
   </div>
</div>