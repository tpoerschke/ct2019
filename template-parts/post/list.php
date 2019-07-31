<section class="blogpost-list">
   <?php while (have_posts()) : the_post(); ?>
      <article class="blogpost">
         <h2 class="title"> <a href="<?php the_permalink() ?>"><?php the_title(); ?> </a> </h2>
         <?php get_template_part('template-parts/post/thumbnail'); ?>
         <?php
            the_content('weiterlesen','','');
         ?>
         <div class="blogpost-meta">
            <img src="<?php assetsPath('image'); ?>/category.png" alt="Kategorie Icon" class="small-icon" /> <?php the_category(', '); ?> &lowast; <?php the_time('j. F Y') ?>
         </div>
      </article> <!-- article -->
   <?php endwhile; ?>
   <?php show_pagination(); ?>
</section>
