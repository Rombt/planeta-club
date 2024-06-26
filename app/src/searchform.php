   <form class="search-form" role="search" method="get" action="<?php echo esc_url(site_url()); ?>"
      data-da=".cont-horizont-menu, 1024">
      <input type="search" class="search-form__input" value="<?php echo get_search_query(); ?>" name="s" id="s"
         placeholder="<?php esc_html_e('Пошук...', 'rombt_pc') ?>" />
      <button type="submit" class="search-form__submit">
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#search_1"></use>
         </svg>

      </button>
   </form>