<?php
	function dy_theme_setup()
	{
		register_nav_menus([
			'primary' => 'Primary'
		]);
		add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme', 'dy_theme_setup');

	function dy_script_enqueue()
	{
		// Enqueue CSS
		wp_enqueue_style('gridism', get_template_directory_uri() . '/css/gridism.css', array(), '5.3', 'all');
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 'all', '2.2');
		wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), '5.3', 'all');
		wp_enqueue_style('unslider', 'https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/css/unslider.css', 'all', '1.1');
		wp_enqueue_style('unslider-dots', 'https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/css/unslider-dots.css', 'all', '1.1');
		if(get_theme_mod('preset', 'dark') == 'dark'):
			wp_enqueue_style('jquery-ui-theme', 'https://code.jquery.com/ui/1.11.4/themes/ui-darkness/jquery-ui.min.css', 'all', '1.1');
		else:
			wp_enqueue_style('jquery-ui-theme', 'https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css', 'all', '1.1');
		endif;
		wp_enqueue_style('droid-sans', 'https://fonts.googleapis.com/css?family=Droid+Sans', 'all', '1.1');
		wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '5.3', 'all');
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '5.3', 'all');

		// Enqueue JS
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-js', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '5.3', true);
		wp_enqueue_script('unslider-js', 'https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/js/unslider-min.js', array(), '5.3', true);
	}
	add_action('wp_enqueue_scripts', 'dy_script_enqueue');

	function init_widgets($id)
	{
		register_sidebar([
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<ul>',
			'after_widget' => '</ul>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);
	}
	add_action('widgets_init', 'init_widgets');

	require_once('customizer.php');