<?php get_header(); ?>
		<?php 
			$slider_query = new WP_Query([
				'cat' => 8,
				'orderby' => 'date',
				'order' => 'ASC'
			]);
		?>
		<?php if($slider_query->have_posts()): ?>
			<section class="showcase">
				<div class="my-slider">
					<ul>
						<?php while($slider_query->have_posts()): $slider_query->the_post(); ?>
							<li>
								<?php the_post_thumbnail(); ?>
								<div class="caption">
									<h2><?php the_title(); ?></h2>
									<div class="slide-description">
										<?php the_content(); ?>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>
			</section>
		<?php else: ?>
		<h4><?php echo __('Sorry, there are no sliders!', 'dy'); ?></h4>
	<?php endif; ?>

	<?php $tabs_query = new WP_Query([
		'cat' => 7,
		'orderby' => 'date',
		'order' => 'ASC'
	]); 
	?>
	<?php if($tabs_query->have_posts()): ?>
		<section>
			<div class="wrap wider">
				<div class="grid">
					<div id="tabs">
						<ul>
							<?php while($tabs_query->have_posts()): $tabs_query->the_post(); ?>
								<li><a href="#tabs-<?php echo get_the_id(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
						</ul>
						
						<?php while($tabs_query->have_posts()): $tabs_query->the_post(); ?>
						<div id="tabs-<?php echo get_the_id(); ?>">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
	<?php else: ?>
		<h4><?php echo __('Sorry, there are no tabs!', 'dy'); ?></h4>
	<?php endif; ?>


	<?php if(have_posts()): ?>
		<?php
			$main_query = new WP_Query([
				'category__not_in' => array(7, 8),
				'posts_per_page' => 3
			]);
		?>
		<?php while($main_query->have_posts()): $main_query->the_post(); ?>
			<section>
				<div class="wrap wider">
					<div class="grid">
						<div class="post-wrap">
							<article class="post">
								<div class="unit one-third">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="unit two-thirds">
									<h3><?php the_title() ?></h3>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="button"><?php echo __('Read More', 'dy'); ?></a>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php else: ?>
		<h4><?php echo __('Sorry, there are no posts!', 'dy'); ?></h4>
	<?php endif; ?>
<?php get_footer(); ?>