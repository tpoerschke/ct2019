<?php if (has_post_thumbnail()) : ?>
   <img class='thumbnail img-fluid mb-3' src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>"/>
<?php endif; ?>
