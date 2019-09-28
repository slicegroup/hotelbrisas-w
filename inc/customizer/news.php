<?php

/******************
*   News Section  *
******************/

		$wp_customize->add_section( 'news_section' , array(
			'title'      => __('News', 'hotel-wp-lite' ),			
			'description'=> __('Show your latest news. Please, create posts and add a category to posts. Select this category given below News Category list. News sidebar, Events widget Go Pro Version.', 'hotel-wp-lite' ),
		    'panel' => 'theme_options',
		) );


		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'hotel_wp_option[news_section_background_color]',
			array(
				'default'     => '#ffffff',
				'type'        => 'option',			
				'transport'   => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		
		// background Alpha Color Picker control
		$wp_customize->add_control(
			new Hotel_WP_Alpha_Color_Control(
				$wp_customize,
				'hotel_wp_option[news_section_background_color]',
				array(
					'label'         =>  __('News Section Background Color','hotel-wp-lite' ),
					'section'       => 'news_section',
					'settings'      => 'hotel_wp_option[news_section_background_color]',
					'show_opacity'  => true, // Optional.
					'palette'	=> hotel_wp_color_codes(),
				)
			)
		);			
			
		// news section title
		$wp_customize->add_setting( 'hotel_wp_option[news_section_title]' , array(
		'default'    => __('News ~ Events','hotel-wp-lite' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[news_section_title]' , array(
		'label' => __('Section Title','hotel-wp-lite' ),
		'section' => 'news_section',
		'type'=>'text',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'hotel_wp_option[news_section_title]', array(
			'selector' => '#news .section-title',
		) );
		
		// news section description
		$wp_customize->add_setting( 'hotel_wp_option[news_section_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[news_section_description]' , array(
		'label' => __('Section Subtitle','hotel-wp-lite' ),
		'section' => 'news_section',
		'type'=>'text',
		) );
		
		// Max no of news 
		$wp_customize->add_setting( 'hotel_wp_option[news_no_of_show]' , array(
		'default'    => 4,
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[news_no_of_show]' , array(
		'label' => __('Max no of news to show','hotel-wp-lite' ),
		'section' => 'news_section',
		'type'=>'number',
		) );
		
		global $hotel_wp_categories;
		
		// news category show
		$wp_customize->add_setting( 'hotel_wp_option[news_category_show]' , array(
		'default'    => "",
		'sanitize_callback' => 'sanitize_text_field',		 
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[news_category_show]' , array(
		'label' => __('News Category Show','hotel-wp-lite' ),
		'section' => 'news_section',
		'type'=>'select',
		'choices'=> $hotel_wp_categories, 
		) );
		
		
		// News section image
		$wp_customize->add_setting( 'hotel_wp_option[news_section_image]' , array(
		'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=>'option'
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'hotel_wp_option[news_section_image]' ,
		array(
		'label'          => __( 'News Section Image', 'hotel-wp-lite' ),
		'description'=> __('Upload your background image. Important! Uncompressed images will increase your site loading time.','hotel-wp-lite'),
		'section'        => 'news_section',
		) )	);
		
		$wp_customize->add_setting( 'hotel_wp_option[news_section_image_repeat]', array(
			'default'        => 'no-repeat',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
		) );
		$wp_customize->add_control(
			'hotel_wp_option[news_section_image_repeat]', 
			array(
				'label'    => __( 'Background Repeat', 'hotel-wp-lite' ),
				'section'  => 'news_section',
				'settings' => 'hotel_wp_option[news_section_image_repeat]',
				'type'     => 'select',
				'choices'  => hotel_wp_background_style(),
			)
		);
		
