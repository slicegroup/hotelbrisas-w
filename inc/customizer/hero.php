<?php

/************************
*    Hero Settings      *
*************************/
	
		$wp_customize->add_section( 'hero_section' , array(
			'title'      => __('Hero Section', 'hotel-wp-lite' ),			 
			'description'=> __('Add hero contents and add a button with a Navigation link.', 'hotel-wp-lite' ),
			'panel' => 'theme_options',
		) );
			
	
		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'hotel_wp_option[hero_section_background_color]',
			array(
				'default'     => '#fff',
				'type'        => 'option',				
				'transport'   => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
				
			)
		);
		
		// background Alpha Color Picker control
		$wp_customize->add_control(
			new Hotel_WP_Alpha_Color_Control(
				$wp_customize,
				'hotel_wp_option[hero_section_background_color]',
				array(
					'label'         =>  __('Section Background Color','hotel-wp-lite' ),
					'section'       => 'hero_section',
					'settings'      => 'hotel_wp_option[hero_section_background_color]',
					'show_opacity'  => true, // Optional.
					'palette'	=> hotel_wp_color_codes(),
				)
			)
		);				
		
		// page section title
		$wp_customize->add_setting( 'hotel_wp_option[hero_section_title]' , array(
		'default'    => __('Section Title','hotel-wp-lite' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('hotel_wp_option[hero_section_title]' , array(
		'label' => __('Section Title','hotel-wp-lite' ),
		'section' => 'hero_section',
		'type'=>'text',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'hotel_wp_option[hero_section_title]', array(
			'selector' => '#custom-page .section-title',
		) );		
	
		//description
		$wp_customize->add_setting( 'hotel_wp_option[hero_section_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('hotel_wp_option[hero_section_description]' , array(
		'label' => __('Section Subtitle','hotel-wp-lite' ),
		'section' => 'hero_section',
		'type'=>'text',
		) );
		
		// page
		$wp_customize->add_setting( 'hotel_wp_option[hero_section_page]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[hero_section_page]' , array(
		'label' => __('Select a Page to Display','hotel-wp-lite' ),
		'section' => 'hero_section',
		'type'=>'select',
		'choices'=> hotel_wp_get_all_pages(), 
		) );
				
		// read more button text
		$wp_customize->add_setting( 'hotel_wp_option[hero_section_button_text]' , array(
		'default'    => __('View More','hotel-wp-lite' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[hero_section_button_text]' , array(
		'label' => __('View More Button Text','hotel-wp-lite' ),
		'section' => 'hero_section',
		'type'=>'text',
		) );
					
		// read more button url
		$wp_customize->add_setting( 'hotel_wp_option[hero_section_url]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('hotel_wp_option[hero_section_url]' , array(
		'label' => __('Button URL','hotel-wp-lite' ),
		'description' => __('(Hide button - keep the URL balnk)','hotel-wp-lite' ),
		'section' => 'hero_section',
		'type'=>'text',
		) );
		
		$wp_customize->add_control(
			'hotel_wp_option[hero_section_image_repeat]', 
			array(
				'label'    => __( 'Background Repeat', 'hotel-wp-lite' ),
				'section'  => 'hero_section',
				'settings' => 'hotel_wp_option[hero_section_image_repeat]',
				'type'     => 'select',
				'choices'  => hotel_wp_background_style(),
			)
		);		
					