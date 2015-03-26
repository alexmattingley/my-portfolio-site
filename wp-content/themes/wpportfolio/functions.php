<?php


//Loads Theme CSS
function theme_styles() {

	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('grid', get_template_directory_uri() . '/css/grid.css');
	wp_enqueue_style('responsive_nav', get_template_directory_uri() . '/css/responsive_nav.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('googlefonts', 'http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic');
	wp_enqueue_style('social', get_template_directory_uri() . '/css/webfonts/ss-social.css');
	wp_enqueue_style('icons_full', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.css');
	wp_enqueue_style('icons_min', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css');

	wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
	if ( is_page( 'home-page' ) ) {
		wp_enqueue_style('flexslider');
	}
}

//Strips p tags from images
// img unautop
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="imagewp">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

//Loads Theme Js
function theme_js() {

	wp_register_script ('flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true );
	if ( is_page( 'home-page' ) ) {
		wp_enqueue_script('flexslider');
	}
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
	
	// Might need to change class names for responsive nav, if you actually want to use this, and not just as an excercise
	wp_enqueue_script('responsive_nav', get_template_directory_uri() . '/js/responsive_nav.js', array('jquery'), '', true );
}

add_action ('wp_enqueue_scripts', 'theme_js');
add_action( 'wp_enqueue_scripts', 'theme_styles');
//Enable Custom Menus
add_theme_support( 'menus' );

//Enables the creation of widgets.
function create_widget ( $name, $id, $description ) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>' 
		); 

	register_sidebar( $args );
}

create_widget('Left Footer', 'footer_left', 'Displays in the bottom left of the footer');
create_widget('Middle Footer', 'footer_middle', 'Displays in the middle of footer');
create_widget('Right Footer', 'footer_right', 'Displays in the bottom right of footer');

?>