<?php

/******************
*   Room Section  *
******************/

		$wp_customize->add_section( 'room_section' , array(
			'title'      => __('Rooms ~ Travel Packages', 'hotel-wp-lite' ),			
			'description'=> __('Show your Travel packages, Rooms ect. First, create a page from home-page template, From Home page settings select the created page as static home page. Create posts with image, title and text and select from post from post dropdown below.', 'hotel-wp-lite' ),
		    'panel' => 'theme_options',
		) );

	
		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'hotel_wp_option[room_section_background_color]',
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
				'hotel_wp_option[room_section_background_color]',
				array(
					'label'         =>  __('Room Section Background Color','hotel-wp-lite' ),
					'section'       => 'room_section',
					'settings'      => 'hotel_wp_option[room_section_background_color]',
					'show_opacity'  => true, // Optional.
					'palette'	=> hotel_wp_color_codes(),
				)
			)
		);			
			
		// room section title
		$wp_customize->add_setting( 'hotel_wp_option[room_section_title]' , array(
		'default'    => 'Featured Rooms',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[room_section_title]' , array(
		'label' => __('Section Title','hotel-wp-lite' ),
		'section' => 'room_section',
		'type'=>'text',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'hotel_wp_option[room_section_title]', array(
			'selector' => '#room .section-title',
		) );
		
		// room section description
		$wp_customize->add_setting( 'hotel_wp_option[room_section_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[room_section_description]' , array(
		'label' => __('Section Subtitle','hotel-wp-lite' ),
		'section' => 'room_section',
		'type'=>'text',
		) );
		
		// Max no of room 
		$wp_customize->add_setting( 'hotel_wp_option[room_no_of_show]' , array(
		'default'    => 3,
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[room_no_of_show]' , array(
		'label' => __('Max no of room to show','hotel-wp-lite' ),
		'section' => 'room_section',
		'type'=>'number',
		) );
		
		global $hotel_wp_all_posts;
		
		// post 1
		$wp_customize->add_setting( 'hotel_wp_option[room_cat]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[room_cat]' , array(
		'label' => __('Select Post 1','hotel-wp-lite' ),
		'section' => 'room_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );
		
		// post 2
		$wp_customize->add_setting( 'hotel_wp_option[room_cat2]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[room_cat2]' , array(
		'label' => __('Select Post 2','hotel-wp-lite' ),
		'section' => 'room_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );
		
		// post 3
		$wp_customize->add_setting( 'hotel_wp_option[room_cat3]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[room_cat3]' , array(
		'label' => __('Select Post 3','hotel-wp-lite' ),
		'section' => 'room_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );									
		
		// Room section image
		$wp_customize->add_setting( 'hotel_wp_option[room_section_image]' , array(
		'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=>'option'
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'hotel_wp_option[room_section_image]' ,
		array(
		'label'          => __( 'Room Section Image', 'hotel-wp-lite' ),
		'description'=> __('Upload your background image. Important! Uncompressed images will increase your site loading time.','hotel-wp-lite'),
		'section'        => 'room_section',
		) )	);
		
		$wp_customize->add_setting( 'hotel_wp_option[room_section_image_repeat]', array(
			'default'        => 'no-repeat',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
		) );
		$wp_customize->add_control(
			'hotel_wp_option[room_section_image_repeat]', 
			array(
				'label'    => __( 'Background Repeat', 'hotel-wp-lite' ),
				'section'  => 'room_section',
				'settings' => 'hotel_wp_option[room_section_image_repeat]',
				'type'     => 'select',
				'choices'  => hotel_wp_background_style(),
			)
		);
		
