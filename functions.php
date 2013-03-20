<?php 

/**
 * Define Theme Directory Based on the Template Directory (This can be overwritten in a child theme using the get_stylesheet_directory_uri() instead )
 */
define('THEME_BASE_DIR', get_template_directory_uri());

/**
 *  Remove Generator Meta Tag
 */
remove_action( 'wp_head', 'wp_generator' );

/**
 *  Remove Version from RSS Feeds
 */
function remove_wp_version () {
    return '';
}
add_filter ( 'the_generator', 'remove_wp_version' );

/**
 *  Load all the CSS Files
 */

function load_css() {
	// Register CSS
	wp_register_style( 'bootstrap-styles', THEME_BASE_DIR.'/assets/bootstrap/css/bootstrap.min.css' );
	wp_register_style( 'prettyPhoto-styles', THEME_BASE_DIR.'/assets/prettyPhoto/css/prettyPhoto.css' );
	wp_register_style( 'flexslider-styles', THEME_BASE_DIR.'/assets/css/flexslider.css' );
	wp_register_style( 'font-awesome-styles', THEME_BASE_DIR.'/assets/css/font-awesome.css' );
	wp_register_style( 'main-styles', THEME_BASE_DIR.'/style.css' );

	// Enqueue CSS
	wp_enqueue_style( 'bootstrap-styles');
	wp_enqueue_style( 'prettyPhoto-styles');
	wp_enqueue_style( 'flexslider-styles');
	wp_enqueue_style( 'font-awesome-styles');
	wp_enqueue_style( 'main-styles');

	if (is_page_template('template-cv.php')) {
		// Register CSS
		wp_register_style( 'cv-styles', THEME_BASE_DIR.'/assets/css/cv.css' );

		// Enqueue CSS
		wp_enqueue_style( 'cv-styles');
	}
}
add_action( 'wp_enqueue_scripts', 'load_css' );

/**
 *  Load all the JS Files
 */

function load_js() {
	// Deresgister WordPress Bundled jQuery
	wp_deregister_script( "jquery" );

	// Register JS
	wp_register_script( 'jquery-script', THEME_BASE_DIR.'/assets/js/jquery-1.8.2.min.js' );
	wp_register_script( 'bootstrap-script', THEME_BASE_DIR.'/assets/bootstrap/js/bootstrap.min.js', array(), false, true );
	wp_register_script( 'flexslider-script', THEME_BASE_DIR.'/assets/js/jquery.flexslider.js', array(), false, true );
	wp_register_script( 'tweet-script', THEME_BASE_DIR.'/assets/js/jquery.tweet.js', array(), false, true );
	wp_register_script( 'jflickrfeed-script', THEME_BASE_DIR.'/assets/js/jflickrfeed.js', array(), false, true );
	wp_register_script( 'google-maps-api-script', 'http://maps.google.com/maps/api/js?sensor=true', array(), false, true );
	wp_register_script( 'jquery-ui-map-script', THEME_BASE_DIR.'/assets/js/jquery.ui.map.min.js', array(), false, true );
	wp_register_script( 'quicksand-script', THEME_BASE_DIR.'/assets/js/jquery.quicksand.js', array(), false, true );
	wp_register_script( 'prettyPhoto-script', THEME_BASE_DIR.'/assets/prettyPhoto/js/jquery.prettyPhoto.js', array(), false, true );
	wp_register_script( 'main-scripts', THEME_BASE_DIR.'/assets/js/scripts.js', array(), false, true );

	// Enqueue JS
	wp_enqueue_script( 'jquery-script');
	wp_enqueue_script( 'bootstrap-script');
	wp_enqueue_script( 'flexslider-script');
	wp_enqueue_script( 'tweet-script');
	wp_enqueue_script( 'jflickrfeed-script');
	wp_enqueue_script( 'google-maps-api-script');
	wp_enqueue_script( 'jquery-ui-map-script');
	wp_enqueue_script( 'quicksand-script');
	wp_enqueue_script( 'prettyPhoto-script');
	wp_enqueue_script( 'main-scripts');
}
add_action( 'wp_enqueue_scripts','load_js' );

/**
 *  Set Up Custom Post Types
 */

function add_custom_post_types() {

// Register Post Type for Portfolio
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio' ),
				'view_item' => __( 'View Portfolio Items' ),
				'edit' => __( 'Edit Portfolio Item' ),
				'edit_item' => __('Edit Portfolio Item'),
				'add_new' => __('Add Portfolio Item'),
				'add_new_item' => __('Add Portfolio Item')
			),
			'public' => true,
			'show_ui' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'rewrite' => true,
			'capability_type' => 'page',
			'supports' => array( 'title','thumbnail','editor','excerpt', 'category'),
			'taxonomies' => array('skill-type')
	
		)
	);

// Register Post Type for Customer Testimonials
	register_post_type( 'testimonials', 
		array(
        	'labels' => array(
		        'name' => 'Testimonials',
		        'singular_name' => 'Testimonial',
		        'add_new' => 'Add New',
		        'add_new_item' => 'Add New Testimonial',
		        'edit_item' => 'Edit Testimonial',
		        'new_item' => 'New Testimonial',
		        'view_item' => 'View Testimonial',
		        'search_items' => 'Search Testimonials',
		        'not_found' =>  'No Testimonials found',
		        'not_found_in_trash' => 'No Testimonials in the trash',
		        'parent_item_colon' => '',
    	),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'supports' => array( 'editor', 'title' )

    	) 
	);
	
}
add_action( 'init', 'add_custom_post_types' );

/**
 *  Set Up the Custom Taxonomies
 */

function add_custom_taxonomies() {
	// Add new "Skill Type" taxonomy to Posts
	register_taxonomy('skill-type', 'portfolio', array(
		// Hierarchical taxonomy (like categories)
		'hierarchical' => true,
		'show_admin_column' => true,
		// This array of options controls the labels displayed in the WordPress Admin UI
		'labels' => array(
			'name' => _x( 'Skill Types', 'taxonomy general name' ),
			'singular_name' => _x( 'Skill Type', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Skill Types' ),
			'all_items' => __( 'All Skill Types' ),
			'parent_item' => __( 'Parent Skill Type' ),
			'parent_item_colon' => __( 'Parent Skill Type:' ),
			'edit_item' => __( 'Edit Skill Type' ),
			'update_item' => __( 'Update Skill Type' ),
			'add_new_item' => __( 'Add New Skill Type' ),
			'new_item_name' => __( 'New Skill Type Name' ),
			'menu_name' => __( 'Skill Types' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'skill-type', // This controls the base slug that will display before each term
			'with_front' => false, // Don't display the category base before "/skill-type/"
			'hierarchical' => true // This will allow URL's like "/skill-type/css/",
		),
	));
}
add_action( 'init', 'add_custom_taxonomies', 0 );

// Register Navigation Menu Areas
register_nav_menu( 'main-menu', 'Main Menu Area' );

/**
 * Slightly Modified Options Framework
 */
require_once ('admin/index.php');

// include the class in your theme or plugin
include_once 'assets/php/MetaBox.php';
include_once 'assets/php/MediaAccess.php';


// include css to help style our custom meta boxes
add_action( 'init', 'my_metabox_styles' );
 
function my_metabox_styles()
{
    if ( is_admin() ) 
    { 
        wp_enqueue_style( 'custom_meta_css', THEME_BASE_DIR. '/assets/css/meta.css' );
    }
}

$meta_attach = new WPAlchemy_MediaAccess();
$cv_media = new WPAlchemy_MediaAccess();

$custom_metabox_attachment = new WPAlchemy_MetaBox(array
(
	'id' => '_portfolio_meta',
	'title' => 'Portfolio Work Information',
	'template' => STYLESHEETPATH . '/assets/meta_templates/work_attachment_meta.php',
	'types' => array('portfolio')
));

$cv_metabox = new WPAlchemy_MetaBox(array
(
    'id' => '_cv_meta',
    'title' => 'CV Meta Box',
    'template' => STYLESHEETPATH . '/assets/meta_templates/cv-meta.php',
    'include_template' => 'template-cv.php'
));

$page_extra_metabox = new WPAlchemy_MetaBox(array
(
    'id' => '_page_extra_meta',
    'title' => 'Page Extras',
    'template' => STYLESHEETPATH . '/assets/meta_templates/page_extra_meta.php',
    'types' => array('page', 'portfolio', 'post')
));

$testimonials_metabox = new WPAlchemy_MetaBox(array
(
    'id' => '_testimonials_meta',
    'title' => 'Customer Testimonial Details',
    'template' => STYLESHEETPATH . '/assets/meta_templates/testimonials_meta.php',
    'types' => array('testimonials')
));

/**
 *  Custom Column for Admin page
 */

// Change the columns for the edit Portfolio screen and then add content to them
function change_columns( $cols ) {
  $cols = array(
    'cb'       => '<input type="checkbox" />',
    'title'      => __( 'Work Title',      'trans' ),
    'skill-type' => __( 'Skill Types', 'trans' ),
    'date'     => __( 'Date', 'trans' ),
    'work_thumbnail'     => __( 'Thumbnail', 'trans' ),
  );
  return $cols;
}
add_filter( "manage_portfolio_posts_columns", "change_columns" );

function custom_columns( $column, $post_id ) {
  $portfolio_data = get_post_meta( $post_id, '_portfolio_meta', true );
  switch ( $column ) {
    case "skill-type":
      $skill_type = get_the_term_list($post->ID,'skill-type','',', ','');
      echo $skill_type;
      break;
    case "work_thumbnail":
      echo "<img src=\"".$portfolio_data['video_thumbnail']."\" height=\"90\" />";
      break;
  }
}
add_action( "manage_posts_custom_column", "custom_columns", 10, 2 );

// Change the columns for Testimonials and then add content to them
add_filter( 'manage_edit-testimonials_columns', 'testimonials_edit_columns' );
function testimonials_edit_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => 'Title',
        'testimonial' => 'Testimonial',
        'testimonial-client-name' => 'Client\'s Name',
        'testimonial-source' => 'Business/Site',
        'testimonial-link' => 'Link',
        'author' => 'Posted by',
        'date' => 'Date'
    );
 
    return $columns;
}

add_action( 'manage_posts_custom_column', 'testimonials_columns', 10, 2 );
function testimonials_columns( $column, $post_id ) {
    $testimonial_data = get_post_meta( $post_id, '_testimonials_meta', true );
    switch ( $column ) {
        case 'testimonial':
            the_excerpt();
            break;
        case 'testimonial-client-name':
            if ( ! empty( $testimonial_data['client_name'] ) )
                echo $testimonial_data['client_name'];
            break;
        case 'testimonial-source':
            if ( ! empty( $testimonial_data['business_site_name'] ) )
                echo $testimonial_data['business_site_name'];
            break;
        case 'testimonial-link':
            if ( ! empty( $testimonial_data['url_link'] ) )
                echo "<a href=\"".$testimonial_data['url_link']."\" target=\"_blank\">".$testimonial_data['url_link']."</a>";
            break;
    }
}

?>