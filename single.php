<?php get_header(); ?>

	<article class="blogpost" itemscope itemtype="http://schema.org/BlogPosting">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <?php $postDate = get_the_date('d. F Y'); ?>
         <span class="post-date"><time><?php echo $postDate ?></time></span>
         <!-- TODO: h2 -> h1 ? -->
         <h2 class="title" itemprop="headline"><?php the_title(); ?></h2>
			<?php get_template_part('template-parts/post/thumbnail'); ?>
			<div id="anti-blocker"></div>
			<div itemprop="articleBody">
				<?php the_content(); ?>
			</div>
         <div class="blogpost-meta">
				<p>
					<time itemprop="datePublished" content="<?php the_date(); ?>"><?php echo $postDate; ?></time> von <?php the_author_posts_link(); ?> |
					Kategorie: <?php the_category(', '); ?> <?php the_tags('<br/>Schlagwörter: ', ' // ', ''); ?>
				</p>
			</div>
		<?php endwhile; endif; ?>
	</article><!-- article -->
	<section class="comments">
		<?php comments_template(); ?>
	</section>
<?php get_footer(); ?>
