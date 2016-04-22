<?php

/*------------------------Enable Widgets-------------------------*/

function blank_widgets_init() {
	register_sidebar( array(
		'name' => ('First Widget'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar( array(
		'name' => ('Search'),
		'id' => 'search-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="search">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar( array(
		'name' => ('Logo'),
		'id' => 'logo-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

        register_sidebar( array(
		'name' => ('Footer left'),
		'id' => 'footer-left',
		'description' => 'Widget for the left side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	register_sidebar( array(
		'name' => ('Footer Middle'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	register_sidebar( array(
		'name' => ('Footer right'),
		'id' => 'footer-right',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
        register_sidebar( array(
		'name' => ('Practice Areas'),
		'id' => 'practice-areas',
		'description' => 'Widget for the the practice area section on front page',
		'before_widget' => '<div class="pbox">',
		'after_widget' => '</div>',
		'before_title' => '<div class="parea">', 
		'after_title' => '</div>'
	));
}
add_action('widgets_init', 'blank_widgets_init'); /* add_action('widgets_init', 'blank_widgets_init'); */

/*------------------------Enable Menu-------------------------*/

add_theme_support('menus');

/*---- Enable Post Thumbnails ----*/

add_theme_support( 'post-thumbnails' );

function five_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 5 );
    }
}
add_action( 'pre_get_posts', 'five_posts_on_homepage' );

?>
