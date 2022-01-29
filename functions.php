<?php 



function buson_setup(){

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails', array('slider', 'service', 'case', 'team', 'testimonial', 'page', 'post') );
    	
    add_image_size( 'custom-size', 80, 80, true );
    add_image_size( 'custom-size-2', 60, 60, true );
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'buson'),
        'footer-menu' => __('Footer Menu', 'buson'),
        'footer-menu-2' => __('Footer Menu Post', 'buson')
    ));
}
add_action( 'after_setup_theme', 'buson_setup' );

require get_template_directory() . '/inc/tuki-comments.php';
require get_template_directory() . '/inc/theme-options.php';
require get_template_directory() . '/inc/demo-installer.php';
/**
 * Plugin-installer.
 */
require get_template_directory() . '/inc/Plugin-installer.php';

function buson_assets(){

    //All Styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), null, 'all' );
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), null, 'all' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), null, 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), null, 'all' );
    wp_enqueue_style( 'main', get_stylesheet_uri());

    //All Script
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );

}

add_action( 'wp_enqueue_scripts', 'buson_assets');


// Register Custom Post Type Slider
function buson_cpt() {

	$labels = array(
		'name' => _x( 'Sliders', 'Post Type General Name', 'buson' ),
		'singular_name' => _x( 'Slider', 'Post Type Singular Name', 'buson' ),
		'menu_name' => _x( 'Sliders', 'Admin Menu text', 'buson' ),
		'name_admin_bar' => _x( 'Slider', 'Add New on Toolbar', 'buson' ),
		'archives' => __( 'Slider Archives', 'buson' ),
		'attributes' => __( 'Slider Attributes', 'buson' ),
		'parent_item_colon' => __( 'Parent Slider:', 'buson' ),
		'all_items' => __( 'All Sliders', 'buson' ),
		'add_new_item' => __( 'Add New Slider', 'buson' ),
		'add_new' => __( 'Add New', 'buson' ),
		'new_item' => __( 'New Slider', 'buson' ),
		'edit_item' => __( 'Edit Slider', 'buson' ),
		'update_item' => __( 'Update Slider', 'buson' ),
		'view_item' => __( 'View Slider', 'buson' ),
		'view_items' => __( 'View Sliders', 'buson' ),
		'search_items' => __( 'Search Slider', 'buson' ),
		'not_found' => __( 'Not found', 'buson' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'buson' ),
		'featured_image' => __( 'Featured Image', 'buson' ),
		'set_featured_image' => __( 'Set featured image', 'buson' ),
		'remove_featured_image' => __( 'Remove featured image', 'buson' ),
		'use_featured_image' => __( 'Use as featured image', 'buson' ),
		'insert_into_item' => __( 'Insert into Slider', 'buson' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'buson' ),
		'items_list' => __( 'Sliders list', 'buson' ),
		'items_list_navigation' => __( 'Sliders list navigation', 'buson' ),
		'filter_items_list' => __( 'Filter Sliders list', 'buson' ),
	);
	$args = array(
		'label' => __( 'Slider', 'buson' ),
		'description' => __( '', 'buson' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'slider', $args );

    $labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'buson' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'buson' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'buson' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'buson' ),
		'archives' => __( 'Service Archives', 'buson' ),
		'attributes' => __( 'Service Attributes', 'buson' ),
		'parent_item_colon' => __( 'Parent Service:', 'buson' ),
		'all_items' => __( 'All Services', 'buson' ),
		'add_new_item' => __( 'Add New Service', 'buson' ),
		'add_new' => __( 'Add New', 'buson' ),
		'new_item' => __( 'New Service', 'buson' ),
		'edit_item' => __( 'Edit Service', 'buson' ),
		'update_item' => __( 'Update Service', 'buson' ),
		'view_item' => __( 'View Service', 'buson' ),
		'view_items' => __( 'View Services', 'buson' ),
		'search_items' => __( 'Search Service', 'buson' ),
		'not_found' => __( 'Not found', 'buson' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'buson' ),
		'featured_image' => __( 'Featured Image', 'buson' ),
		'set_featured_image' => __( 'Set featured image', 'buson' ),
		'remove_featured_image' => __( 'Remove featured image', 'buson' ),
		'use_featured_image' => __( 'Use as featured image', 'buson' ),
		'insert_into_item' => __( 'Insert into Service', 'buson' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'buson' ),
		'items_list' => __( 'Services list', 'buson' ),
		'items_list_navigation' => __( 'Services list navigation', 'buson' ),
		'filter_items_list' => __( 'Filter Services list', 'buson' ),
	);
	$args = array(
		'label' => __( 'Service', 'buson' ),
		'description' => __( '', 'buson' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'thumbnail', 'excerpt'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 22,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

    $labels = array(
		'name' => _x( 'Cases', 'Post Type General Name', 'buson' ),
		'singular_name' => _x( 'Case', 'Post Type Singular Name', 'buson' ),
		'menu_name' => _x( 'Cases', 'Admin Menu text', 'buson' ),
		'name_admin_bar' => _x( 'Case', 'Add New on Toolbar', 'buson' ),
		'archives' => __( 'Case Archives', 'buson' ),
		'attributes' => __( 'Case Attributes', 'buson' ),
		'parent_item_colon' => __( 'Parent Case:', 'buson' ),
		'all_items' => __( 'All Cases', 'buson' ),
		'add_new_item' => __( 'Add New Case', 'buson' ),
		'add_new' => __( 'Add New', 'buson' ),
		'new_item' => __( 'New Case', 'buson' ),
		'edit_item' => __( 'Edit Case', 'buson' ),
		'update_item' => __( 'Update Case', 'buson' ),
		'view_item' => __( 'View Case', 'buson' ),
		'view_items' => __( 'View Cases', 'buson' ),
		'search_items' => __( 'Search Case', 'buson' ),
		'not_found' => __( 'Not found', 'buson' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'buson' ),
		'featured_image' => __( 'Featured Image', 'buson' ),
		'set_featured_image' => __( 'Set featured image', 'buson' ),
		'remove_featured_image' => __( 'Remove featured image', 'buson' ),
		'use_featured_image' => __( 'Use as featured image', 'buson' ),
		'insert_into_item' => __( 'Insert into Case', 'buson' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Case', 'buson' ),
		'items_list' => __( 'Cases list', 'buson' ),
		'items_list_navigation' => __( 'Cases list navigation', 'buson' ),
		'filter_items_list' => __( 'Filter Cases list', 'buson' ),
	);
	$args = array(
		'label' => __( 'Case', 'buson' ),
		'description' => __( '', 'buson' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-spreadsheet',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 22,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'case', $args );

	$labels = array(
		'name' => _x( 'Teams', 'Post Type General Name', 'buson' ),
		'singular_name' => _x( 'Team Member', 'Post Type Singular Name', 'buson' ),
		'menu_name' => _x( 'Teams', 'Admin Menu text', 'buson' ),
		'name_admin_bar' => _x( 'Team Member', 'Add New on Toolbar', 'buson' ),
		'archives' => __( 'Team Member Archives', 'buson' ),
		'attributes' => __( 'Team Member Attributes', 'buson' ),
		'parent_item_colon' => __( 'Parent Team Member:', 'buson' ),
		'all_items' => __( 'All Teams', 'buson' ),
		'add_new_item' => __( 'Add New Team Member', 'buson' ),
		'add_new' => __( 'Add New', 'buson' ),
		'new_item' => __( 'New Team Member', 'buson' ),
		'edit_item' => __( 'Edit Team Member', 'buson' ),
		'update_item' => __( 'Update Team Member', 'buson' ),
		'view_item' => __( 'View Team Member', 'buson' ),
		'view_items' => __( 'View Teams', 'buson' ),
		'search_items' => __( 'Search Team Member', 'buson' ),
		'not_found' => __( 'Not found', 'buson' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'buson' ),
		'featured_image' => __( 'Featured Image', 'buson' ),
		'set_featured_image' => __( 'Set featured image', 'buson' ),
		'remove_featured_image' => __( 'Remove featured image', 'buson' ),
		'use_featured_image' => __( 'Use as featured image', 'buson' ),
		'insert_into_item' => __( 'Insert into Team Member', 'buson' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'buson' ),
		'items_list' => __( 'Teams list', 'buson' ),
		'items_list_navigation' => __( 'Teams list navigation', 'buson' ),
		'filter_items_list' => __( 'Filter Teams list', 'buson' ),
	);
	$args = array(
		'label' => __( 'Team', 'buson' ),
		'description' => __( '', 'buson' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-groups',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'team', $args );

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'buson' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'buson' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'buson' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'buson' ),
		'archives' => __( 'Testimonial Archives', 'buson' ),
		'attributes' => __( 'Testimonial Attributes', 'buson' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'buson' ),
		'all_items' => __( 'All Testimonials', 'buson' ),
		'add_new_item' => __( 'Add New Testimonial', 'buson' ),
		'add_new' => __( 'Add New', 'buson' ),
		'new_item' => __( 'New Testimonial', 'buson' ),
		'edit_item' => __( 'Edit Testimonial', 'buson' ),
		'update_item' => __( 'Update Testimonial', 'buson' ),
		'view_item' => __( 'View Testimonial', 'buson' ),
		'view_items' => __( 'View Testimonials', 'buson' ),
		'search_items' => __( 'Search Testimonial', 'buson' ),
		'not_found' => __( 'Not found', 'buson' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'buson' ),
		'featured_image' => __( 'Featured Image', 'buson' ),
		'set_featured_image' => __( 'Set featured image', 'buson' ),
		'remove_featured_image' => __( 'Remove featured image', 'buson' ),
		'use_featured_image' => __( 'Use as featured image', 'buson' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'buson' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'buson' ),
		'items_list' => __( 'Testimonials list', 'buson' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'buson' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'buson' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'buson' ),
		'description' => __( '', 'buson' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-status',
		'supports' => array('title', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );
}
add_action( 'init', 'buson_cpt', 0 );


// Register Taxonomy Case Category
function buson_case_category_tax() {

	$labels = array(
		'name'              => _x( 'Case Categories', 'taxonomy general name', 'buson' ),
		'singular_name'     => _x( 'Case Category', 'taxonomy singular name', 'buson' ),
		'search_items'      => __( 'Search Case Categories', 'buson' ),
		'all_items'         => __( 'All Case Categories', 'buson' ),
		'parent_item'       => __( 'Parent Case Category', 'buson' ),
		'parent_item_colon' => __( 'Parent Case Category:', 'buson' ),
		'edit_item'         => __( 'Edit Case Category', 'buson' ),
		'update_item'       => __( 'Update Case Category', 'buson' ),
		'add_new_item'      => __( 'Add New Case Category', 'buson' ),
		'new_item_name'     => __( 'New Case Category Name', 'buson' ),
		'menu_name'         => __( 'Case Category', 'buson' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'buson' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => false,
	);
	register_taxonomy( 'casecategory', array('case'), $args );

}
add_action( 'init', 'buson_case_category_tax' );

function buson_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'buson' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on Blog and search page.', 'buson' ),
        'before_widget' => '<aside class="single_sidebar_widget search_widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'buson_widgets_init' );