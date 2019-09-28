<?php

/**************** 
* Staff Settings *
****************/

			$wp_customize->add_section( 'team_section' , array(
				'title'      => __('Staff', 'hotel-wp-lite'),
				'description'=> __('Display team members. First, create a page from home-page template, From Home page settings select the created page as static home page. Select the post from post dropdown below. Unlimited team options Go Pro version.','hotel-wp-lite'),
				'panel'  => 'theme_options'
			) );			
		
			// background Alpha Color Picker setting
			$wp_customize->add_setting(
				'hotel_wp_option[team_section_background_color]',
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
					'hotel_wp_option[team_section_background_color]',
					array(
						'label'         =>  __('Staff Section Background Color','hotel-wp-lite' ),
						'section'       => 'team_section',
						'settings'      => 'hotel_wp_option[team_section_background_color]',
						'show_opacity'  => true, // Optional.
						'palette'	=> hotel_wp_color_codes(),
					)
				)
			);				

            $wp_customize->add_setting( 'hotel_wp_option[team_section_title]' , array(
                'default'    => __('Our Staff','hotel-wp-lite' ),
                'sanitize_callback' => 'sanitize_text_field',
                'type'=>'option'
            ));
            $wp_customize->add_control('hotel_wp_option[team_section_title]' , array(
                'label' => __('Section Title','hotel-wp-lite'),
                'section' => 'team_section',
                'type'=>'text',
            ) );
			
			$wp_customize->selective_refresh->add_partial( 'hotel_wp_option[team_section_title]', array(
				'selector' => '#team .section-title',
			) );		
			
            $wp_customize->add_setting( 'hotel_wp_option[team_section_description]' , array(
                'default'    => '',
                'sanitize_callback' => 'sanitize_text_field',
                'type'=>'option'
            ));
            $wp_customize->add_control('hotel_wp_option[team_section_description]' , array(
                'label' => __('Section Subtitle','hotel-wp-lite'),
                'section' => 'team_section',
                'type'=>'text',
            ) );

	
        $wp_customize->add_setting( 'team_label2', array(
            'default'        => __('Select Posts with featured image','hotel-wp-lite' ),
			'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_control( new Hotel_WP_Label_Custom_control( $wp_customize, 'team_label2', array(
            'label'   => __('Select existing Posts with featured image (team), title and content','hotel-wp-lite' ),
            'section' => 'team_section',
        ) ) );

		global $hotel_wp_all_posts;
		
		// post 1
		$wp_customize->add_setting( 'hotel_wp_option[team_cat]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[team_cat]' , array(
		'label' => __('Select Post 1','hotel-wp-lite' ),
		'section' => 'team_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );
		
		// post 2
		$wp_customize->add_setting( 'hotel_wp_option[team_cat2]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[team_cat2]' , array(
		'label' => __('Select Post 2','hotel-wp-lite' ),
		'section' => 'team_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );
		
		// post 3
		$wp_customize->add_setting( 'hotel_wp_option[team_cat3]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[team_cat3]' , array(
		'label' => __('Select Post 3','hotel-wp-lite' ),
		'section' => 'team_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );									
		
		// post 4
		$wp_customize->add_setting( 'hotel_wp_option[team_cat4]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[team_cat4]' , array(
		'label' => __('Select Post 4','hotel-wp-lite' ),
		'section' => 'team_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );
		
		// post 5
		$wp_customize->add_setting( 'hotel_wp_option[team_cat5]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[team_cat5]' , array(
		'label' => __('Select Post 5','hotel-wp-lite' ),
		'section' => 'team_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );
		
		// post 6
		$wp_customize->add_setting( 'hotel_wp_option[team_cat6]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[team_cat6]' , array(
		'label' => __('Select Post 6','hotel-wp-lite' ),
		'section' => 'team_section',
		'type'=>'select',
		'choices'=> $hotel_wp_all_posts, 
		) );		

		$wp_customize->add_setting( 'hotel_wp_option[team_section_image]' , array(
			'default' => '',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'type'=>'option'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'hotel_wp_option[team_section_image]' ,
			array(
				'label'          => __( 'Background Image', 'hotel-wp-lite' ),
				'section'        => 'team_section',
			) )	);

        $wp_customize->add_setting( 'hotel_wp_option[team_section_image_repeat]', array(
            'default'        => 'no-repeat',
            'sanitize_callback' => 'sanitize_text_field',
            'type'=>'option'
        ) );
		
        $wp_customize->add_control(
            'hotel_wp_option[team_section_image_repeat]',
            array(
                'label'    => __( 'Background Repeat', 'hotel-wp-lite' ),
                'section'  => 'team_section',
                'settings' => 'hotel_wp_option[team_section_image_repeat]',
                'type'     => 'select',
                'choices'  => hotel_wp_background_style(),
            )
        );
