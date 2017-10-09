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
							<article class="page">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</article>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>