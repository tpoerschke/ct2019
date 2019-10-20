<?php get_header(); ?>
		<article class="page">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="title-outer">
					<h1 class="title"><?php the_title(); ?></h1>
				</div>
				<?php if(is_home() || is_front_page()): ?>
					<img src="<?php assetsPath("image"); ?>/arrow-down.png" id="scroll-down-arrow" />
				<?php endif ?>
				<div class="page-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
		</article><!-- article -->
<?php get_footer(); ?>
