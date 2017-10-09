<?php get_header(); ?>
	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
			<section class="bar">
				<div class="wrap wider">
					<div class="grid">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</section>

			<section>
				<div class="wrap wider">
					<div class="grid">
						<div class="post-wrap">
							<div class="unit two-thirds ">
								<article class="post">
									<?php if(has_post_thumbnail()): ?>
										<?php the_post_thumbnail(); ?>
									<?php endif; ?>									
									<h3><?php the_title(); ?></h3>
									<div class="meta">
										<?php echo __("Posted at"); ?> <?php the_time(); ?> <?php echo __("on"); ?> <?php the_date(); ?> <?php echo __("by"); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><strong><?php the_author(); ?></strong></a>
									</div>
									<?php the_content(); ?>
								</article>
							</div>

							<div class="unit one-third">
								<div class="sidebar-widget">
									<?php if(is_active_sidebar('sidebar')): ?>
										<?php dynamic_sidebar('sidebar'); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>