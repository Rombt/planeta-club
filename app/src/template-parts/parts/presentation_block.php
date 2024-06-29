<div class="wrapper-section">
   <div class="rmbt-full-width rmbt-presentation-block-full-width">
      <section class="rmbt-container rmbt-presentation-block">
         <?php get_template_part('template-parts/components/title', null, ['title'=>'Презентація','class'=>'title-section']); ?>

         <p><?php echo rmbt_get_redux_field('rmbt-presentation-block_section-text') ?></p>
         <div class="rmbt-presentation-block__row">
            <div class="rmbt-presentation-block__col">
               <!-- <video class="rmbt-presentation-block__video" -->

               <iframe class="rmbt-presentation-block__video"
                  src="https://www.youtube.com/embed/xpK2wpuBtug?si=dgqPIIY-TLHdZ6Tw" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
         </div>
      </section>
   </div>
</div>