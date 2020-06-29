<div class="site-services_item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s" style="background-color: <?php the_field('dv_color') ?>;">
   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
      <?php if (has_post_thumbnail()): ?>
         <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
         <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-thumbnail.jpg" alt="<?php the_title(); ?>">
         <?php endif ?>
   </a>
   <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
   <p><?php echo wp_trim_words( get_the_content(), 30, '...' ) ?></p>
   <div class="more-plust">
      <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
         <span class="vertical"></span>
         <span class="horizontal"></span>
      </a>
   </div>
</div>