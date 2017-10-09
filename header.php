<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta <?php bloginfo('charset'); ?>>
	<title><?php bloginfo('name'); ?> |
		<?php if(is_front_page()): ?>
			<?php bloginfo('description'); ?>
		<?php else: ?>
			<?php wp_title(); ?>
		<?php endif; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<style>
		<?php if(get_theme_mod('preset', 'dark') == 'dark'): ?>
			body{
				background-color: #232323;
				color: #fff;
			}

			nav.main-nav{
				background: #333;
				color: #fff;
			}

			nav.main-nav li a
			{
				color: #fff;
			}

			.caption
			{
				background: #333;
				color: #fff;
			}

			.post-wrap
			{
				border: 1px solid #666;
			}

			.button
			{
				background: #333;
				color: #fff;
			}

			.post
			{
				border-bottom: 1px solid #333;
			}

			footer
			{
				background: #333;
				color: #fff;
			}
		<?php else: ?>
			body{
				background-color: #fff;
				color: #333;
			}
			nav.main-nav{
				background: #f4f4f4;
				color: #333;
			}
			nav.main-nav li a
			{
				color: #333;
			}
			.caption
			{
				background: #f4f4f4;
				color: #333;
			}
			.post-wrap
			{
				border: 1px solid #ccc;
			}
			.button
			{
				background: #f4f4f4;
				color: #333;
			}
			.post
			{
				border-bottom: 1px solid #ccc;
			}
			footer
			{
				background: #ccc;
				color: #333;
			}
		<?php endif; ?>


		a
		{
			color: <?php echo get_theme_mod('color', '#f9992b'); ?>
		}

		nav.main-nav li a:hover
		{
			background: <?php echo get_theme_mod('color', '#f9992b'); ?>
		}

		.button:hover
		{
			background: <?php echo get_theme_mod('color', '#f9992b'); ?>
		}

		.bar
		{
			background: <?php echo get_theme_mod('color', '#f9992b'); ?>
		}

		.meta
		{
			border-bottom: 4px double <?php echo get_theme_mod('color', '#f9992b'); ?>;
		}

		.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active
		{
		    border: 1px solid <?php echo get_theme_mod('color', '#f9992b') ?>;
		    background: <?php echo get_theme_mod('color', '#f9992b') ?>
		}

		.current_page_item a
		{
			background: <?php echo get_theme_mod('color', '#f9992b'); ?> !important;
		}
	</style>
</head>
<body>
	
	<header>
		<div class="wrap wider">
			<div class="grid">
				<div class="unit half">
					<h1 class="logo"><?php bloginfo('name'); ?></h1>
					<p class="tagline"><?php bloginfo('description'); ?></p>
				</div>

				<div class="unit half">
					<div class="header-right">
						<form method="get" action="<?php echo esc_url(home_url('/')); ?>" class="search">
							<input type="text" name="s" placeholder="Search...">
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>

	<nav class="main-nav">
		<div class="wrap wider">
			<div class="grid">
				<ul>
					<?php
						wp_nav_menu([
							'theme_location' => 'primary',
							'container' => false,
						]);
					?>
				</ul>
			</div>
		</div>
	</nav>