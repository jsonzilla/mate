<?php
function mate_custom_logo() {
	$defaults = array(
			'height'      => 60,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'mate_custom_logo' );

//add_filter("the_content", "content_filter");
/*function content_filter($content)
{
	// Take the existing content and return a subset of it
	return substr($content, 0, 300) . "...";
}*/

add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2); 
function add_login_logout_link($items, $args) {         
	ob_start();         
	wp_loginout('index.php');         
	$loginoutlink = ob_get_contents();         
	ob_end_clean();         
	$items .= '<li>'. $loginoutlink .'</li>';     
	return $items; 
}

function mate_widgets_init() {
	register_sidebar( array(
			'name'          => __( 'Index Primary Sidebar', 'theme_name' ),
			'id'            => 'sidebar-index-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
			'name'          => __( 'Index Secondary Sidebar', 'theme_name' ),
			'id'            => 'sidebar-index-2',
			'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li></ul>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
			'name'          => __( 'Footer About Sidebar', 'theme_name' ),
			'id'            => 'sidebar-footer-1',
			'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li></ul>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
			'name'          => __( 'Footer Primary Sidebar', 'theme_name' ),
			'id'            => 'sidebar-footer-2',
			'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li></ul>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
			'name'          => __( 'Footer Secondary Sidebar', 'theme_name' ),
			'id'            => 'sidebar-footer-3',
			'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li></ul>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'mate_widgets_init' );

$_dirs = array(
		TEMPLATEPATH . '/functions/*.php',
		TEMPLATEPATH . '/shortcodes/*.php',
		TEMPLATEPATH . '/widgets/*.php',
);

// if (is_admin())
	// 	$_dirs[] = TEMPLATEPATH . '/admin/*.php';
	
foreach ($_dirs as $_dir) {
	foreach (glob($_dir) as $_file) {
		require_once $_file;
	}
}

?>