<?php
/**
 * madison functions and definitions
 *
 * @package madison
 */

if ( ! function_exists( 'madison_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function madison_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on madison, use a find and replace
	 * to change 'madison' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'madison', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' 	=> esc_html__( 'Primary Menu', 'madison' ),
		'drawer'	=> esc_html__( 'Drawer Menu', 'madison' ),
		'footer'	=> esc_html__( 'Footer Menu', 'madison' ) 
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'madison_custom_background_args', array(
		'default-color' => 'f5f5f5',
		'default-image' => '',
	) ) );
}
endif; // madison_setup
add_action( 'after_setup_theme', 'madison_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function madison_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'madison_content_width', 900 );
}
add_action( 'after_setup_theme', 'madison_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function madison_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'madison' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="mdl-cell mdl-cell--4-col mdl-cell--12-col-desktop mdl-card mdl-shadow--2dp widget %2$s">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<header class="widget-header mdl-card__title"><h3 class="widget-title">',
		'after_title'   => '</h3></header><div class="widget-content mdl-card__supporting-text">',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Drawer', 'madison' ),
		'id'            => 'drawer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Product Archive', 'madison' ),
		'id'            => 'product-archive',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="mdl-cell mdl-cell--4-col mdl-cell--12-col-desktop mdl-card mdl-shadow--2dp widget %2$s">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<header class="widget-header mdl-card__title"><h3 class="widget-title">',
		'after_title'   => '</h3></header><div class="widget-content mdl-card__supporting-text">',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Single Product', 'madison' ),
		'id'            => 'product-single',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="mdl-cell mdl-cell--8-col mdl-cell--12-col-desktop mdl-card mdl-shadow--2dp widget %2$s">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<header class="widget-header mdl-card__title"><h3 class="widget-title">',
		'after_title'   => '</h3></header><div class="widget-content mdl-card__supporting-text">',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Single Product', 'madison' ),
		'id'            => 'product-single-a',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="mdl-cell mdl-cell--8-col mdl-cell--6-col-desktop mdl-card mdl-shadow--2dp widget %2$s">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<header class="widget-header mdl-card__title"><h3 class="widget-title">',
		'after_title'   => '</h3></header><div class="widget-content mdl-card__supporting-text">',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Single Product', 'madison' ),
		'id'            => 'product-single-b',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp widget %2$s">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<header class="widget-header mdl-card__title"><h3 class="widget-title">',
		'after_title'   => '</h3></header><div class="widget-content mdl-card__supporting-text">',
	) );

}
add_action( 'widgets_init', 'madison_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function madison_scripts() {

	$fonts = '//fonts.googleapis.com/css?family=Roboto+Mono:400,500,300,100|Roboto:100,400,300italic,300,700,500';
	wp_enqueue_style( 'madison-mdl-roboto', $fonts );

	wp_enqueue_style( 'madison-mdl-icons', '//fonts.googleapis.com/icon?family=Material+Icons' );

//	$primary = get_theme_mod( 'primary_color', 'indigo' );
//	$secondary = get_theme_mod( 'secondary_color', 'pink' );

//	wp_enqueue_style( 'madison-mdl-css', '//storage.googleapis.com/code.getmdl.io/1.0.1/material.'.$primary.'-'.$secondary.'.min.css' );
	wp_enqueue_style( 'madison-mdl-css', '//storage.googleapis.com/code.getmdl.io/1.0.1/material.light_blue-pink.min.css' );
//	wp_enqueue_style( 'madison-mdl-css', '//www.getmdl.io/templates/dashboard/material.min.css' );

	wp_enqueue_style( 'madison-style', get_stylesheet_uri() );

//	wp_enqueue_script( 'madison-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

//	wp_enqueue_script( 'madison-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

//	wp_enqueue_style( 'mdlwp-style', get_stylesheet_directory_uri() . '/style.min.css' );

	wp_enqueue_script( 'madison-mdl-js', '//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js', array(), '1.0.1', true );

//	wp_enqueue_script( 'masonry-js', '//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js', array('jquery'), '1.0.1', true );
	wp_enqueue_script( 'jquery-masonry', array( 'jquery' ), '1.0.1', true );

	wp_enqueue_script( 'madison-js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '1.0.1', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'madison_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Meta Box
 */
require get_template_directory() . '/inc/meta-box.php';

/**
 * Extra functions and such
 */
require get_template_directory() . '/inc/rock-n-roll.php';

/**
 * Walker menu for our drawer menu
 */
require get_template_directory() . '/inc/nav-walker-drawer.php';

/**
 * Woocommerce things and stuff
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Metaboxes with CMB2
 */
require get_template_directory() . '/inc/cmb2.php';

/**
 * Stuff that probably belongs in a plugin
 */

/**
 * Metaboxes with CMB2
 */
require get_template_directory() . '/plugin/woo-reviews.php';


// add_filter( 'gform_field_input', 'mdl_my_gf_1', 10, 5 );
function mdl_my_gf_1( $input, $field, $value, $lead_id, $form_id ) {
    // because this will fire for every form/field, only do it when it is the specific form and field
    if ( $form_id == 1 && $field->id == 1 ) {
        $input = "<input type='text' id='input_1_1' name='input_1' value class='mdl-textfield__input' tabindex='1'>";
    }
    return $input;
}
// add_filter( 'gform_field_input', 'mdl_my_gf_2', 10, 5 );
function mdl_my_gf_2( $input, $field, $value, $lead_id, $form_id ) {
    // because this will fire for every form/field, only do it when it is the specific form and field
    if ( $form_id == 1 && $field->id == 2 ) {
        $input = "<input type='email' id='input_1_2' name='input_1' value class='mdl-textfield__input' tabindex='2'>";
    }
    return $input;
}
// add_filter( 'gform_field_input', 'mdl_my_gf_3', 10, 5 );
function mdl_my_gf_3( $input, $field, $value, $lead_id, $form_id ) {
    // because this will fire for every form/field, only do it when it is the specific form and field
    if ( $form_id == 1 && $field->id == 3 ) {
        $input = "<textarea name='input_3' id='input_1_3' class='textarea small mdl-textfield__input' tabindex='3' rows='5' cols='50'></textarea>";
    }
    return $input;
}

add_filter( 'gform_submit_button', 'mdl_my_submit', 10, 2 );
function mdl_my_submit( $button, $form ) {
    return "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--blue-500' id='gform_submit_button_{$form['id']}'><span>Send Message</span></button>";
}


/**
 * Foo_Widget
 */
require get_template_directory() . '/widgets/foo.php';
require get_template_directory() . '/widgets/consultation.php';

// register Foo_Widget widget
function register_foo_widget() {
    register_widget( 'Foo_Widget' );
    register_widget( 'WPG_Ongoing_Widget' );
}
add_action( 'widgets_init', 'register_foo_widget' );