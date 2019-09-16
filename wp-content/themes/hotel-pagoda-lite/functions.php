<?php




 the_post_thumbnail();
 the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
 the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
 the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
 the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

 the_post_thumbnail( array(100,100) );

 add_theme_support('post-thumbnails');
 set_post_thumbnail_size(1568,9999);

 function my_theme_setup() {
     add_theme_support( 'woocommerce' );
 }
 add_action( 'after_setup_theme', 'my_theme_setup' );


 //Compatibilidad con galerías a partir de WooCommerce 3.0>
 add_action( 'after_setup_theme', 'yourtheme_setup' );
 function yourtheme_setup() {
 add_theme_support( 'wc-product-gallery-slider' );
 }

 /**
  * Declare WooCommerce Support
  */
 function oblique_woocommerce_support() {
 	add_theme_support( 'woocommerce' );
 	// add_theme_support( 'wc-product-gallery-zoom' );
     add_theme_support( 'wc-product-gallery-lightbox' );
     add_theme_support( 'wc-product-gallery-slider' );
 }
 add_action( 'after_setup_theme', 'oblique_woocommerce_support' );
 // Register Custom Post Type




 // Register Custom Post Type
 function add_file_types_to_uploads($file_types){
 $new_filetypes = array();
 $new_filetypes['svg'] = 'image/svg+xml';
 $file_types = array_merge($file_types, $new_filetypes );
 return $file_types;
 }
 add_action('upload_mimes', 'add_file_types_to_uploads');
 // Register Custom Post Type
 function Banner() {

 	$labels = array(
 		'name'                  => _x( 'Banners', 'Post Type General Name', 'text_domain' ),
 		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
 		'menu_name'             => __( 'Banner', 'text_domain' ),
 		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
 		'archives'              => __( 'Item Archives', 'text_domain' ),
 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
 		'all_items'             => __( 'All Items', 'text_domain' ),
 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
 		'add_new'               => __( 'Add New', 'text_domain' ),
 		'new_item'              => __( 'New Item', 'text_domain' ),
 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
 		'update_item'           => __( 'Update Item', 'text_domain' ),
 		'view_item'             => __( 'View Item', 'text_domain' ),
 		'view_items'            => __( 'View Items', 'text_domain' ),
 		'search_items'          => __( 'Search Item', 'text_domain' ),
 		'not_found'             => __( 'Not found', 'text_domain' ),
 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
 		'items_list'            => __( 'Items list', 'text_domain' ),
 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
 	);
 	$args = array(
 		'label'                 => __( 'Banner', 'text_domain' ),
 		'description'           => __( 'Post Type Description', 'text_domain' ),
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 5,
 		'menu_icon'             => 'dashicons-format-gallery',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => true,
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'page',
 	);
 	register_post_type( 'Banner', $args );

 }
 add_action( 'init', 'Banner', 0 );
 if( function_exists('acf_add_local_field_group') ):

 acf_add_local_field_group(array(
 	'key' => 'group_5d77b0e9a00a1',
 	'title' => 'Promotion',
 	'fields' => array(
 		array(
 			'key' => 'field_5d77b12b37da2',
 			'label' => 'Promotion Link',
 			'name' => 'promotion_link',
 			'type' => 'url',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array(
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'default_value' => '',
 			'placeholder' => 'Promotion Link',
 		),
 		array(
 			'key' => 'field_5d77e2cd5d81e',
 			'label' => 'button title',
 			'name' => 'button_title',
 			'type' => 'text',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array(
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'default_value' => 'Ver más',
 			'placeholder' => '',
 			'prepend' => '',
 			'append' => '',
 			'maxlength' => '',
 		),
 	),
 	'location' => array(
 		array(
 			array(
 				'param' => 'post_type',
 				'operator' => '==',
 				'value' => 'banner',
 			),
 		),
 	),
 	'menu_order' => 0,
 	'position' => 'normal',
 	'style' => 'default',
 	'label_placement' => 'top',
 	'instruction_placement' => 'label',
 	'hide_on_screen' => array(
 		0 => 'permalink',
 	),
 	'active' => true,
 	'description' => 'Promotion',
 ));

 endif;

 function Gallery() {

 	$labels = array(
 		'name'                  => _x( 'Gallery', 'Post Type General Name', 'text_domain' ),
 		'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'text_domain' ),
 		'menu_name'             => __( 'Gallery', 'text_domain' ),
 		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
 		'archives'              => __( 'Item Archives', 'text_domain' ),
 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
 		'all_items'             => __( 'All Items', 'text_domain' ),
 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
 		'add_new'               => __( 'Add New', 'text_domain' ),
 		'new_item'              => __( 'New Item', 'text_domain' ),
 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
 		'update_item'           => __( 'Update Item', 'text_domain' ),
 		'view_item'             => __( 'View Item', 'text_domain' ),
 		'view_items'            => __( 'View Items', 'text_domain' ),
 		'search_items'          => __( 'Search Item', 'text_domain' ),
 		'not_found'             => __( 'Not found', 'text_domain' ),
 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
 		'items_list'            => __( 'Items list', 'text_domain' ),
 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
 	);
 	$args = array(
 		'label'                 => __( 'Gallery', 'text_domain' ),
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 5,
 		'menu_icon'             => 'dashicons-images-alt2',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => '',
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'page',
 	);
 	register_post_type( 'Gallery', $args );

 }
 add_action( 'init', 'Gallery', 0 );




if (!function_exists('is_plugin_active')) {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
}

if ( ! function_exists( 'hotel_pagoda_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hotel_pagoda_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Hotel Pagoda, use a find and replace
		 * to change 'hotel-pagoda-lite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hotel-pagoda-lite', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'hotel-pagoda-lite' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hotel_pagoda_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

        /**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'hotel_pagoda_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hotel_pagoda_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hotel_pagoda_content_width', 640 );
}
add_action( 'after_setup_theme', 'hotel_pagoda_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hotel_pagoda_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Hotel Pagoda Sidebar', 'hotel-pagoda-lite' ),
		'id'            => 'hotel_pagoda_main_sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'hotel-pagoda-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Hotel Booking Sidebar', 'hotel-pagoda-lite' ),
        'id'            => 'hotel_pagoda_booking_sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'hotel-pagoda-lite' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    for ($i = 1; $i <= 3; $i++) {
        register_sidebar(array(
            'name' => esc_html__('Footer Widget', 'hotel-pagoda-lite') . $i,
            'id' => 'hotel_pagoda_footer_' . $i,
            'description' => esc_html__('Shows widgets at Footer Widget ', 'hotel-pagoda-lite') . $i,
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
    }
}
add_action( 'widgets_init', 'hotel_pagoda_widgets_init' );


if (!function_exists('hotel_pagoda_get_theme_options')):
    function hotel_pagoda_get_theme_options()
    {
        return wp_parse_args(get_option('hotel_pagoda_theme_options', array()), hotel_pagoda_theme_options());
    }
endif;
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/template-parts/header/hotel-pagoda-menu.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/lib/hotel-pagoda-enqueue.php';

require get_template_directory() . '/lib/hotel-pagoda-functions.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/functions/customizer.php';
require get_template_directory() . '/inc/theme-option-settings.php';
require get_template_directory() . '/inc/customizer/functions/custom-sanitization.php';
require get_template_directory() . '/inc/customizer/functions/customizer-control.php';
require get_template_directory() . '/inc/customizer/functions/class-hotel-pagoda-discount.php';
require get_template_directory() . '/inc/customizer/hotel-pagoda-color-picker/hotel-pagoda-color-picker.php';
require get_template_directory() . '/lib/hotel-pagoda-tgmp.php';

if (!function_exists('hotel_pagoda_lite_add_editor_styles')) {
    // Add editor styles
    function hotel_pagoda_lite_add_editor_styles()
    {
        add_editor_style(get_template_directory() . '/inc/customizer/css/admin/editor-styles.min.css');
    }

    add_action('init', 'hotel_pagoda_lite_add_editor_styles');
}

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if (!function_exists('hotel_pagoda_shortcode_atts_gallery')) {

    function hotel_pagoda_shortcode_atts_gallery($out)
    {
        remove_filter(current_filter(), __FUNCTION__);
        $out['size'] = 'full';
        return $out;
    }
}
