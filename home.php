<?php get_header(); ?>
	<section class="bar">
		<div class="wrap wider">
			<div class="grid">
				<h1><?php echo __("Blog", "dy"); ?></h1>
			</div>
		</div>
	</section>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
			<section>
				<div class="wrap wider">
					<div class="grid">
						<div class="post-wrap">
							<?php if(has_post_thumbnail()): ?>
							<article class="post">
								<div class="unit one-third">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="unit two-thirds">
									<h3><?php the_title(); ?></h3>
									<div class="meta">
										<?php echo __("Posted at", "dy"); ?> <?php the_time(); ?> <?php echo __("on"); ?> <?php the_date(); ?> <?php echo __("by", "dy"); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><strong><?php the_author(); ?></strong></a>
									</div>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="button"><?php echo __('Read More', 'dy'); ?></a>
								</div>
							</article>
							<?php else: ?>
								<article class="post">
									<h3><?php the_title(); ?></h3>
									<div class="meta">
										<?php echo __("Posted at"); ?> <?php the_time(); ?> <?php echo __("on"); ?> <?php the_date(); ?> <?php echo __("by"); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><strong><?php the_author(); ?></strong></a>
									</div>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="button"><?php echo __('Read More', 'dy'); ?></a>
								</article>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>