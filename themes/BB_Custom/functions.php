<?php 
/* Adding Featured Image to both Posts and Pages */

add_theme_support( 'post-thumbnails', array( 'post','slide', 'page' ) );

/* Making sure jQuery is only loaded once */

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

/* Loading scripts for jQuery UI */

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_ui_enqueue", 11);
function my_jquery_ui_enqueue() {
   wp_deregister_script('jquery_ui');
   wp_register_script('jquery_ui', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/ui/1.10.3/jquery-ui.js", false, null);
   wp_enqueue_script('jquery_ui');
}

/* Register the widget sidebar for the site */

function bb_sidebar_init() {

	register_sidebar( array(
		'name' => 'Main',
		'id' => 'main',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'bb_sidebar_init' );

/* Register the menus for the site */

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'top-links' => __( 'Top Links')
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_action( 'init', 'register_cpt_slide' );

function register_cpt_slide() {

    $labels = array( 
        'name' => _x( 'slides', 'slide' ),
        'singular_name' => _x( 'slide', 'slide' ),
        'add_new' => _x( 'Add New', 'slide' ),
        'add_new_item' => _x( 'Add New slide', 'slide' ),
        'edit_item' => _x( 'Edit slide', 'slide' ),
        'new_item' => _x( 'New slide', 'slide' ),
        'view_item' => _x( 'View slide', 'slide' ),
        'search_items' => _x( 'Search slides', 'slide' ),
        'not_found' => _x( 'No slides found', 'slide' ),
        'not_found_in_trash' => _x( 'No slides found in Trash', 'slide' ),
        'parent_item_colon' => _x( 'Parent slide:', 'slide' ),
        'menu_name' => _x( 'slides', 'slide' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'custom post type for flex slider',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'slide', $args );
}
