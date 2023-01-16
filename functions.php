<?php
/**
 * Rossport Sea functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rossport_Sea
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rossport_sea_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Rossport Sea, use a find and replace
		* to change 'rossport_sea' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rossport_sea', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header Menu', 'rossport_sea' ),
			'footer-menu-about' => esc_html__( 'Footer Menu About us', 'rossport_sea' ),
			'footer-menu-services' => esc_html__( 'Footer Menu Services', 'rossport_sea' ),
			'footer-menu-bottom' => esc_html__( 'Footer Menu bottom', 'rossport_sea' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'rossport_sea_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'rossport_sea_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rossport_sea_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rossport_sea_content_width', 640 );
}
add_action( 'after_setup_theme', 'rossport_sea_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rossport_sea_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rossport_sea' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rossport_sea' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rossport_sea_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rossport_sea_scripts() {
	wp_enqueue_style( 'rossport_sea-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'rossport_sea-style', 'rtl', 'replace' );
	wp_enqueue_style( 'rossport_sea_landing_page_css_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'rossport_sea_landing_page_css_meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), _S_VERSION);
	wp_enqueue_style( 'rossport_sea_landing_page_css_font-awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'rossport_sea_landing_page_css_slick','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), _S_VERSION);
	wp_enqueue_style( 'rossport_sea_landing_page_css_slick-theme','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), _S_VERSION);
	wp_enqueue_style( 'rossport_sea_landing_page_css_style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
	wp_enqueue_style( 'rossport_sea_landing_page_css_responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION);

	
	wp_enqueue_script( 'rossport_sea-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'rossport_sea-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'rossport_sea-meanmenu-js', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'rossport_sea-scrollUp-js', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'rossport_sea-upload-js', get_template_directory_uri() . '/assets/js/upload.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'rossport_sea-slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'rossport_sea-counterup-js', '//cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'rossport_sea-waypoints-js', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'rossport_sea-jquery-js', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'rossport_sea-jquery-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	define("THEME_DIR", get_template_directory_uri());
        wp_enqueue_script( 'aj_script', THEME_DIR . '/assets/js/aj_script.js', array( 'jquery' ), 1.0, true );
        wp_localize_script( 
        	'aj_script', // the handle name of the script
        	'the_ajax_script', 
        	apply_filters('aj_script_data', array( 
        		'ajaxurl' => admin_url( 'admin-ajax.php' ) , 
        		'postnonce' => wp_create_nonce( 'aj_nonce' )
        	))
        );
        }
add_action( 'wp_enqueue_scripts', 'rossport_sea_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/helper/helper.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
* Menu
*/ 
require get_template_directory() . '/helper/post-type-function.php';

/**
* Menu
*/ 

require get_template_directory() . '/helper/menu.php';

/**
* Option
*/ 

require get_template_directory() . '/helper/option.php';

/**
* Product Short code
*/ 
require get_template_directory() . '/helper/product-short-code.php';







/*
    Like buttonn add shortcode in blog Single page 
*/


add_action( 'wp_ajax_aj_like_post', 'aj_record_like_post' );
add_action( 'wp_ajax_nopriv_aj_like_post', 'aj_record_like_post' ); 
// nopriv allows for nonloggedin users to like as well

 function aj_record_like_post(){

	$post_id = sanitize_text_field( $_POST['id']);

	$current_count = get_post_meta( $post_id, 'likes',true);
	$current_count = $current_count ? $current_count : 0;

	$new_count = $current_count + 1; // add one more like

	update_post_meta( $post_id, 'likes', $new_count); // save new count to the post meta

	echo json_encode(array(
		'status'=>'good',
		'new_count'=>$new_count,
	)); exit;
}

/*============================================================*/
add_shortcode('aj_likes_btn', 'aj_likes_btn');
function aj_likes_btn(){
	global $post;

	$post_id = $post->ID;
	$current_count = get_post_meta( $post_id, 'likes',true);
	$current_count = $current_count ? $current_count : 0;
    
    ob_start();
	?>
	<div class="love_react">
		<p><a style="font-size: 30px; color: red;" class='aj_thumbsup' href='' data-id='<?php echo $post_id;?>'>
		    <i class="fa-regular fa-heart"></i></a> 
		    <span style="padding-left:10px;"><?php echo $current_count;?></span> Likes</p>
	</div>
	<?php
	return ob_get_clean();
}



function delete_post_children($post_id) {
    global $wpdb;

    $ids = $wpdb->get_col("SELECT ID FROM {$wpdb->posts} WHERE post_parent = $post_id AND post_type = 'reviews'");

    foreach ( $ids as $id )
        wp_delete_attachment($id);
}
add_action('delete_post', 'delete_post_children');


