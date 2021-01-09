<?php
define('TPL_DIR_URI', get_template_directory_uri());
define('TPL_DIR', get_stylesheet_directory());

add_theme_support( 'post-thumbnails' );

//Add css files
function svh_enqueue_styles()
{
    wp_enqueue_style('bootstrap', TPL_DIR_URI .
        '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('core', TPL_DIR_URI . '/style.css');
    wp_enqueue_style('home', TPL_DIR_URI . '/assets/css/home.css');
    wp_enqueue_style('slick', TPL_DIR_URI . '/assets/js/slick/slick.css');
    wp_enqueue_style('about--us', TPL_DIR_URI . '/assets/css/about.css');
    wp_enqueue_style('single--page', TPL_DIR_URI . '/assets/css/single.css');
    wp_enqueue_style('archive--page', TPL_DIR_URI . '/assets/css/archive.css');
}
add_action('wp_enqueue_scripts', 'svh_enqueue_styles');


//Add fontawesome
function fontawesome_css(){
    wp_enqueue_style('fontawesome', TPL_DIR_URI .
        '/assets/vendor/fontawesome/css/all.css');
}

add_action('wp_enqueue_scripts', 'fontawesome_css');

//Add js files
function svh_enqueue_scripts()
{
    wp_enqueue_script('popper', TPL_DIR_URI .
        '/assets/vendor/popper/popper.min.js', ['jquery']);
    wp_enqueue_script('bootstrap', TPL_DIR_URI .
        '/assets/vendor/bootstrap/js/bootstrap.min.js', ['jquery']);
    wp_enqueue_script('slick', TPL_DIR_URI .
        '/assets/js/slick/slick.min.js', ['jquery']);
    wp_enqueue_script('about--us', TPL_DIR_URI .
        '/assets/js/about.js', ['jquery']);
}
add_action('wp_enqueue_scripts', 'svh_enqueue_scripts');

//Khai bao vi tri menu
function register_svh_menus()
{
    register_nav_menus([
        'main-menu' => __('Main Menu')
    ]);
}
add_action('init', 'register_svh_menus');

//Yeu cau load file class-wp-bootstrap-navwalker.php
function register_navwalker()
{
    require_once TPL_DIR . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

//Add custom logo
function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );  

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

//footer
function svh_widgets_init()
{

    register_sidebar(
        [
            'name'          => 'Footer',
            'id'            => 'sidebar-footer',
            'description'   => 'Add widgets here to appear in your footer.',
            'before_widget' => '<div id="%1$s" class="col-12 col-lg-4 footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="footer-widget__title">',
            'after_title'   => '</h2>',
        ]
    );

    register_sidebar(
        [
            'name'          => 'Sidebar',
            'id'            => 'sidebar-main',
            'description'   => 'Add widgets here to appear in your sidebar.',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );
}
add_action('widgets_init', 'svh_widgets_init');

// add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
// function add_search_form($items, $args) {
// if( $args->theme_location == 'main-menu' )
//         $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="text" placeholder="search..." name="s" id="s" /><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" /></form></li>';
//         return $items;
// }
