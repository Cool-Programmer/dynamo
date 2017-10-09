<?php
	function dy_customize_register($wp_customize)
	{
		// Settings section
		$wp_customize->add_section('settings', [
			'title' => __('Theme Settings', 'dy'),
			'description' => sprintf(__('Options for dynamo theme', 'dy')),
			'priority' => 130
		]);


		// Preset settings
		$wp_customize->add_setting('preset', [
			'default' => _x('dark', 'dy'),
			'type' => 'theme_mod'
		]);

		// Preset control
		$wp_customize->add_control('preset', [
			'type' => 'select',
			'label' => __('Preset', 'dy'),
			'section' => 'settings',
			'choices' => [
				'dark' => 'Dark',
				'light' => 'Light'
			],
			'priority' => 1
		]);


		// Color picker setting
		$wp_customize->add_setting('color', [
			'default' => _x('#f9992b', 'dy'),
			'type' => 'theme_mod'
		]);

		// Color picker control
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color',
				[
					'label' => __('Theme Color', 'dy'),
					'section' => 'settings',
					'priority' => 2
 				]
			)
		);
	}
	add_action('customize_register', 'dy_customize_register');