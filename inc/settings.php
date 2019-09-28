<?php

/*
 * default settings 
 */
if( !class_exists('hotel_wp_settings') ){
	
	class hotel_wp_settings {
	
		function default_data(){
			return array(
			
			//values of all featured sections - not displayed to user			
			'home_featured_area_0' => 'slider',
			'home_featured_area_1' => 'booking',
			'home_featured_area_2' => 'hero',
			'home_featured_area_3' => 'service',
			'home_featured_area_4' => 'room',
			'home_featured_area_5' => 'contact',
			
			'service_featured_area_1' => 'service',
			'service_featured_area_2' => '',						
			'about_featured_area_1' => 'hero',
			'about_featured_area_2' => '',			
			'contact_featured_area_1' => 'contact',	
			'about_featured_area_1' => 'team',
			'about_featured_area_2' => 'none',	
			
			'widget_posts' => 1,			
			'blog_sidebar_position' => 'right',	//value not displayed to user	
			'home_header_section_disable' => 1,
					
			'hero_section_enable' => 1,
			'hero_section_background_color' => '#fff',
			'hero_section_title' => __('Hero Section','hotel-wp-lite'),
			'hero_section_description' => '',	
			'hero_section_url' => '',
			'hero_section_button_text' =>  __('Read More','hotel-wp-lite'),	
			'hero_section_page' => '',
			
			'room_section_enable' => 1, 			
			'room_section_title' => __('Featured Rooms','hotel-wp-lite'),
			'room_cat' => "",
			'room_cat2' => "",
			'room_cat3' => "",
			'room_section_background_color' => '#ffffff',
			'room_section_image' => '',
			'room_section_image_repeat' => 'no-repeat', //value not displayed to user
			'room_no_of_show' => 3,			   
			'room_section_description' => '',				

			'slider_animation_type' => 'fade', //value not displayed to user
			'slider_cat' => '',
			'slider_cat2' => '',
			'slider_cat3' => '',
			'slider_image_height' => 450,
			'slider_button_text' => __("Click Here to Begin",'hotel-wp-lite'),
			'slider_button_url' => "#service",
			'slider_speed' => 3000,			
			
			'layout_section_post_one_column' => 0 ,	
			'box_layout' => 0 ,	
	
			'booking_section_shortcode' => '',
			'booking_section_enable' => 1,

			'options_section_enable' => 1,
			'options_section_background_color' => '#ffffff',
			'options_section_option1' => '',	
			'options_section_option2' => '',	
			'options_section_option3' => '',	
			'options_section_option4' => '',
			
			'social_facebook_link' => '',
			'social_twitter_link' => '',
			'social_skype_link' => '',
			'social_googleplus_link' => '',
			'social_open_new_tab' => 1,
			
	
			
			'testimonial_section_enable' => 1,
			'testimonial_section_title' => __('Testimonials','hotel-wp-lite'),
			'testimonial_animation_type' => 'slide', //value not displayed to user
			'testimonial_speed' => '3000',
			'testimonial_cat' => "",
			'testimonial_cat2' => "",
			'testimonial_cat3' => "",
			'testimonial_section_background_color' => '#ffffff',
			'testimonial_section_image' => '',
			'testimonial_section_image_repeat' => 'no-repeat',
			'testimonial_section_description' => '',
			
			'contact_section_enable' => 1,
			'contact_section_hide_header' => 0,
			'contact_section_description' => '',
			'contact_section_title' => __('Contact us','hotel-wp-lite'),
			'contact_section_background_color' => '#ffffff',   
			'contact_section_shortcode' => '',
			'contact_section_address' => '',
			'contact_section_email' => '',
			'contact_section_fax' => '',
			'contact_section_phone' => '',
			'contact_section_hours' => '',
			'contact_section_hours_2' => '',
	
			'service_section_enable' => 1,
			'service_section_description' => '',
			'service_section_title' => __('Services','hotel-wp-lite'),
			'service_section_background_color' => '#ffffff',    
			'service_section_image' => '',
			'service_section_image_repeat' => 'no-repeat',
			'service_section_style' => 'default', //value not displayed to user
			'service_cat' => 0,
			'service_cat2' => 0,
			'service_cat3' => 0,
			'service_cat4' => 0,			
			'service_cat5' => 0,
			'service_cat6' => 0,
			
			'team_section_enable' => 1,
			'team_section_description' => '',
			'team_section_title' => __('Our Staff','hotel-wp-lite'),
			'team_section_background_color' => '#ffffff',    
			'team_section_image' => '',
			'team_section_image_repeat' => 'no-repeat',	//value not displayed to user
			'team_cat' => '',
			'team_cat2' => '',
			'team_cat3' => '',
			'team_cat4' => '',
			'team_cat5' => '',
			'team_cat6' => '',							
			
			'news_section_enable' => 1, 			
			'news_section_title' => __('News ~ Blog','hotel-wp-lite'),
			'news_category_show' => "",
			'news_section_background_color' => '#ffffff',
			'news_section_image' => '',
			'news_section_image_repeat' => 'no-repeat',
			'news_no_of_show' => 4,			   
			'news_section_description' => '',
			
			'footer_section_background_color' => '#211202',	
			'footer_section_bottom_background_color' => '#aa5903',	
			'footer_foreground_color' => '#fff',		
            'footer_section_bottom_text' =>  __('A Theme by Ceylon Themes','hotel-wp-lite'),			
					
			);
		}
	}	

}

