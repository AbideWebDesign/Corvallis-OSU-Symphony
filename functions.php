<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
require_once('bs4Navwalker.php');

/*
 * Theme update checker and auto update 
 */
require WP_CONTENT_DIR . '/plugins/plugin-update-checker-master/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/abidewebdesign/Corvallis-OSU-Symphony',
	__FILE__,
	'Corvallis-OSU-Symphony'
);

$myUpdateChecker->setBranch('master'); 

function abide_remove_scripts() {
    wp_dequeue_style( 'abide-styles' );
    wp_deregister_style( 'abide-styles' );

    wp_dequeue_script( 'abide-scripts' );
    wp_deregister_script( 'abide-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'abide_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-abide-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'child-font-sans', 'https://fonts.googleapis.com/css?family=Lato:400,700' );
    wp_enqueue_style( 'child-font-serif', 'https://use.typekit.net/uta8dtj.css' );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-abide-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
	
}

add_image_size('col-3', 295);
add_image_size('col-4', 434);
add_image_size('col-5', 542);
add_image_size('col-6', 650);
add_image_size('col-7', 759);
add_image_size('hero banner', 1800, 800, true);
add_image_size('hero banner sm', 1800, 500, true);
add_image_size('concert', 295, 200, true);

// Additional menus
register_nav_menus( array(
	'footer' => __( 'Footer Menu', 'abide-child' ),
) );

// Register Custom Post Type
function register_concert() {

	$labels = array(
		'name'                  => _x( 'Concerts', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Concert', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Concerts', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Concerts', 'text_domain' ),
		'add_new_item'          => __( 'Add New Concert', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Concert', 'text_domain' ),
		'edit_item'             => __( 'Edit Concert', 'text_domain' ),
		'update_item'           => __( 'Update Concert', 'text_domain' ),
		'view_item'             => __( 'View Concerts', 'text_domain' ),
		'view_items'            => __( 'View Concerts', 'text_domain' ),
		'search_items'          => __( 'Search Concert', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Concert', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Concerts list', 'text_domain' ),
		'items_list_navigation' => __( 'Concerts list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter concerts list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Concert', 'text_domain' ),
		'description'           => __( 'Season Concerts', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-audio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'concert', $args );

}
add_action( 'init', 'register_concert', 0 );

// ACF Options Page

if ( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Global Settings',
		'menu_title'	=> 'Global Settings',
		'menu_slug' 	=> 'global-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

function humanTiming ($time) {
  $time = time() - $time; // to get the time since that moment
  $tokens = array (
      31536000 => 'year',
      2592000 => 'month',
      604800 => 'week',
      86400 => 'day',
      3600 => 'hour',
      60 => 'minute',
      1 => 'second'
  );
  foreach ($tokens as $unit => $text) {
      if ($time < $unit) continue;
      $numberOfUnits = floor($time / $unit);
      return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
  }
}
