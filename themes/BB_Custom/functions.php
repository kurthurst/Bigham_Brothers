<?php 
/* Adding Featured Image to both Posts and Pages */

add_theme_support( 'post-thumbnails', array( 'post','slides', 'page' ) );

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
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
