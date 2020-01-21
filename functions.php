<?php 

if (is_user_logged_in()) {
    show_admin_bar(true);
}



function my_assets() {

	wp_register_style('birddog', get_template_directory_uri() . '/css/birddog.css', array(), false, 'all');
    wp_enqueue_style( 'birddog');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/fa-all.css', array(), false, 'all');
    wp_enqueue_style( 'font-awesome');

    wp_register_style('hamburgers', get_template_directory_uri() . '/css/hamburgers.min.css', array(), false, 'all');
    wp_enqueue_style( 'hamburgers');

    wp_register_style('aos-css', get_template_directory_uri() . '/css/aos.css', array(), false, 'all');
    wp_enqueue_style( 'aos-css');

    wp_register_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style( 'owl-carousel');

    wp_register_style('owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style( 'owl-carousel-theme');

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style( 'stylesheet');

    wp_register_style('all', get_template_directory_uri() . '/css/all.css', array(), false, 'all');
    wp_enqueue_style( 'all');

    wp_enqueue_script('jquery');

    wp_enqueue_script('owl-car-js',get_template_directory_uri() .'/js/owl.carousel.min.js');

    wp_enqueue_script('aos-js',get_template_directory_uri() .'/js/aos.js');

    wp_enqueue_script('app',get_template_directory_uri() .'/js/app.js');
}

add_action( 'wp_enqueue_scripts', 'my_assets' );


// add menus option to wordpress admin
add_theme_support('menus');

// add featured image thumbnails
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' =>__('Top Menu', 'theme'),
        'footer-menu' =>__('Footer Menu', 'theme'),
    )
);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

/************************************************************************
wpmu_add_google_fonts - register google fonts
************************************************************************/

function wpmu_add_google_fonts() {
    wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Assistant|Oswald:300');	
    wp_enqueue_style( 'googleFonts');
}

add_action( 'wp_enqueue_scripts', 'wpmu_add_google_fonts' );
