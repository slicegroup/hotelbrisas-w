<?php

/************************
*     Page Settings     *
*************************/

$wp_customize->add_panel( 'pages_section', array(
  'title' => __( 'Manage Pages*','hotel-wp-lite' ),
  'description' => __('Settings related to Home, About, Contact, Portfolio templates. 15+ Features sections Go Pro version.', 'hotel-wp-lite' ), 
  'priority' => 3, // Mixed with top-level-section hierarchy.
) );	
	
$wp_customize->add_section( 'home_area' , array(
		'title'      => __('Home', 'hotel-wp-lite' ),			 
		'description'=> __('Display featured areas related to Home page. Before selecting Featured Area, enter details related to each Featured Area listed in Theme Options. One page Home template Go Pro Version.','hotel-wp-lite' ),
		'panel' => 'pages_section',
) );

// featured area 0
$wp_customize->add_setting( 'hotel_wp_option[home_featured_area_0]' , array(
	'default'    => 'slider',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=>'option'
));


$wp_customize->add_control('hotel_wp_option[home_featured_area_0]' , array(
	'label' => __('Select Featured Area','hotel-wp-lite' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> hotel_wp_featured_areas(),
) );

// featured area 1
$wp_customize->add_setting( 'hotel_wp_option[home_featured_area_1]' , array(
	'default'    => 'booking',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=>'option'
));


$wp_customize->add_control('hotel_wp_option[home_featured_area_1]' , array(
	'label' => __('Select Featured Area','hotel-wp-lite' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> hotel_wp_featured_areas(),
) );

// featured area 2
$wp_customize->add_setting( 'hotel_wp_option[home_featured_area_2]' , array(
	'default'    => 'hero',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=>'option'
));


$wp_customize->add_control('hotel_wp_option[home_featured_area_2]' , array(
	'label' => __('Select Featured Area','hotel-wp-lite' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> hotel_wp_featured_areas(),
) );

// featured area 3
$wp_customize->add_setting( 'hotel_wp_option[home_featured_area_3]' , array(
	'default'    => 'service',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=>'option'
));


$wp_customize->add_control('hotel_wp_option[home_featured_area_3]' , array(
	'label' => __('Select Featured Area','hotel-wp-lite' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> hotel_wp_featured_areas(),
) );


// featured area 4
$wp_customize->add_setting( 'hotel_wp_option[home_featured_area_4]' , array(
	'default'    => 'testimonial',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=>'option'
));


$wp_customize->add_control('hotel_wp_option[home_featured_area_4]' , array(
	'label' => __('Select Featured Area','hotel-wp-lite' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> hotel_wp_featured_areas(),
) );


// featured area 5
$wp_customize->add_setting( 'hotel_wp_option[home_featured_area_5]' , array(
	'default'    => 'contact',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=>'option'
));


$wp_customize->add_control('hotel_wp_option[home_featured_area_5]' , array(
	'label' => __('Select Featured Area','hotel-wp-lite' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> hotel_wp_featured_areas(),
) );


/******************************************* end of home section settings *******************************************************/
$wp_customize->add_section( 'about_area' , array(
		'title'      => __('About Page', 'hotel-wp-lite' ),			 
		'description'=> __('Display featured areas related to About Page Template. Before selecting Featured Area, enter details related to each Featured Area listed in Theme Options','hotel-wp-lite' ),
		'panel' => 'pages_section',
) );

// featured area 1
$wp_customize->add_setting( 'hotel_wp_option[about_featured_area_1]' , array(
	'default'    => 'hero',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=>'option'
));


$wp_customize->add_control('hotel_wp_option[about_featured_area_1]' , array(
	'label' => __('Select Featured Area','hotel-wp-lite' ),
	'section' => 'about_area',
	'type'=>'select',
	'choices'=> hotel_wp_featured_areas(),
) );

/******************************************* end of section settings *******************************************************/
$wp_customize->add_section( 'contact_area' , array(
		'title'      => __('Contact Page', 'hotel-wp-lite' ),			 
		'description'=>  __('Display featured areas related to Contact Page Template. Before selecting Featured Area, enter details related to each Featured Area listed in Theme Options','hotel-wp-lite' ),
		'panel' => 'pages_section',
) );

// featured area 1
$wp_customize->add_setting( 'hotel_wp_option[contact_featured_area_1]' , array(
	'default'    => 'contact',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=>'option'
));


$wp_customize->add_control('hotel_wp_option[contact_featured_area_1]' , array(
	'label' => __('Select Featured Area','hotel-wp-lite' ),
	'section' => 'contact_area',
	'type'=>'select',
	'choices'=> hotel_wp_featured_areas(),
) );

/******************************************* end of section settings *******************************************************/
$wp_customize->add_section( 'service_area' , array(
		'title'      => __('Service Page', 'hotel-wp-lite' ),			 
		'description'=> __('Display featured areas related to Service Page Template. Before selecting Featured Area, enter details related to each Featured Area listed in Theme Options','hotel-wp-lite' ),
		'panel' => 'pages_section',
) );

// featured area 1
$wp_customize->add_setting( 'hotel_wp_option[service_featured_area_1]' , array(
	'default'    => 'service',
	'sanitize_callback' => 'sanitize_text_field',
	'type'=>'option'
));


$wp_customize->add_control('hotel_wp_option[service_featured_area_1]' , array(
	'label' => __('Select Featured Area','hotel-wp-lite' ),
	'section' => 'service_area',
	'type'=>'select',
	'choices'=> hotel_wp_featured_areas(),
) );

/******************************************* end of section settings *******************************************************/					

