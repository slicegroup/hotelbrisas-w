<?php

/********************** 
* Testimonial section *
**********************/

		/* Testimonial Settings */
		$wp_customize->add_section( 'testimonial_section' , array(
			'title'      => __('Testimonials', 'hotel-wp-lite' ),			
			'description'=> __('Create posts with featured image, text and assign it a category 
			and choose a category from given category settings below. Unlimited testimonials and testimonial slider Go Pro version.', 'hotel-wp-lite' ),
			'panel' => 'theme_options',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'hotel_wp_option[testimonial_section_title]', array(
			'selector' => '#testimonilas h1.section-title',
		) );
	
	
		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'hotel_wp_option[testimonial_section_background_color]',
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
				'hotel_wp_option[testimonial_section_background_color]',
				array(
					'label'         =>  __('Background Color','hotel-wp-lite' ),
					'section'       => 'testimonial_section',
					'settings'      => 'hotel_wp_option[testimonial_section_background_color]',
					'show_opacity'  => true, // Optional.
					'palette'	=> hotel_wp_color_codes(),
				)
			)
		);			

	
		// testimonial section title
		$wp_customize->add_setting( 'hotel_wp_option[testimonial_section_title]' , array(
		'default'    => __('Testimonials','hotel-wp-lite' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('hotel_wp_option[testimonial_section_title]' , array(
		'label' => __('Section Title','hotel-wp-lite' ),
		'section' => 'testimonial_section',
		'type'=>'text',
		) );	
		
		// testimonial section description
		$wp_customize->add_setting( 'hotel_wp_option[testimonial_section_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('hotel_wp_option[testimonial_section_description]' , array(
		'label' => __('Section Subtitle','hotel-wp-lite' ),
		'section' => 'testimonial_section',
		'type'=>'text',
		) );			

        $wp_customize->add_setting( 'testimonial_label3', array(
            'default'        => __('Select Posts with featured image','hotel-wp-lite' ),
			'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_control( new Hotel_WP_Label_Custom_control( $wp_customize, 'testimonial_label3', array(
            'label'   => __('Select Posts with featured image','hotel-wp-lite' ),
            'section' => 'testimonial_section',
        ) ) );

		global $hotel_wp_all_posts;
		
		// post 1
		$wp_customize->add_setting( 'hotel_wp_option[testimonial_cat]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[testimonial_cat]' , array(
		'label' => __('Select Post 1','hotel-wp-lite' ),
		'section' => 'testimonial_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );
		
		// post 2
		$wp_customize->add_setting( 'hotel_wp_option[testimonial_cat2]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[testimonial_cat2]' , array(
		'label' => __('Select Post 2','hotel-wp-lite' ),
		'section' => 'testimonial_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );
		
		// post 3
		$wp_customize->add_setting( 'hotel_wp_option[testimonial_cat3]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[testimonial_cat3]' , array(
		'label' => __('Select Post 3','hotel-wp-lite' ),
		'section' => 'testimonial_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );									
		
		// section image
		$wp_customize->add_setting( 'hotel_wp_option[testimonial_section_image]' , array(
		'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=>'option'
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'hotel_wp_option[testimonial_section_image]' ,
		array(
		'label'          => __( 'Background Image', 'hotel-wp-lite' ),
		'description'=> __('Upload your background image. Important! Uncompressed images will increase your site loading time.','hotel-wp-lite'),
		'section'        => 'testimonial_section',
		) )	);
		
		$wp_customize->add_setting( 'hotel_wp_option[testimonial_section_image_repeat]', array(
			'default'        => 'no-repeat',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
		) );
		$wp_customize->add_control(
			'hotel_wp_option[testimonial_section_image_repeat]', 
			array(
				'label'    => __( 'Background Repeat', 'hotel-wp-lite' ),
				'section'  => 'testimonial_section',
				'settings' => 'hotel_wp_option[testimonial_section_image_repeat]',
				'type'     => 'select',
				'choices'  => hotel_wp_background_style(),
			)
		);			
		
