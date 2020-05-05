<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' ); //get_template_directory_uri() function references theme files in parent theme, which we want to enque first
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' )); //get_stylesheet_directory_uri() points to active theme, which is the child in this case
	wp_enqueue_style('accelerate-child-google-fonts', '//fonts.googleapis.com/css2?family=Poiret+One&display=swap');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

//Create custom post type function
function create_custom_post_types() {
//Create case studies post type
    register_post_type( 'case_studies', //gives new custom post type a unique name
        array( //defines a bunch of settings for new post type
            'labels' => array(
                'name' => __( 'Case Studies' ), //human readable name, the name you will see in admin on lefthand side
                'singular_name' => __( 'Case Study' ) //singluar form of name
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ), //the name used in the URLs for your case study posts - http://localhost:8888/accelerate/case-studies/something-something/
        )
    );

//Create services custom post types
		register_post_type( 'services', //gives new custom post type a unique name
				array( //defines a bunch of settings for new post type
						'labels' => array(
								'name' => __( 'Services' ), //human readable name, the name you will see in admin on lefthand side
								'singular_name' => __( 'Service' ) //singluar form of name
						),
						'public' => true,
						'has_archive' => false,
						'rewrite' => array( 'slug' => 'services' ), //the name used in the URLs for your case study posts - http://localhost:8888/accelerate/case-studies/something-something/
				)
		);

}
add_action( 'init', 'create_custom_post_types' );

function accelerate_theme_child_widget_init() {
//create dynamic sidebar 
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );
