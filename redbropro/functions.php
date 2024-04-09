<?php
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');

function template_scripts()
{

    /**JQCore**/
    wp_enqueue_script('jquery-core', '/wp-includes/js/jquery/jquery.min.js', [], '', true);

    /**Boottstrap**/
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', [], 'v1', true);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', [], 'v1', true);
    /**font awesome**/
    wp_enqueue_style('fa-css', get_template_directory_uri() . '/css/fa.css');

    /**animate scroll**/
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/css/aos.css');
    wp_enqueue_script('999aos-js', get_template_directory_uri() . '/js/aos.js', [], 'v1', true);

    /**phonemask**/
    wp_enqueue_script('phonemask-js', get_template_directory_uri() . '/js/phonemask.js', [], 'v1', true);

    /**scripts and css**/
    wp_enqueue_script('template-js', get_template_directory_uri() . '/js/scripts.js', [], 'v1', true);
    wp_enqueue_style('template-css', get_template_directory_uri() . '/style.css');

    /**Paralax JS**/
    //   wp_enqueue_script('paralax-js', get_template_directory_uri() . '/js/simpleParallax.js', [], 'v1', true);
    wp_enqueue_script('slick.min-js', get_template_directory_uri() . '/js/slick.min.js', [], 'v1', true);
}

add_action('wp_enqueue_scripts', 'template_scripts');

function template_menus()
{

    $locations = array(
        'top__menu' => 'Top menu',
        'header__menu' => 'Header menu',
        'footer__menu' => 'Footer menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'template_menus');


function my_plugin_body_class($classes)
{
    if (!is_front_page()) {
        $classes[] = 'rb_int_page_marker';
        return $classes;
    }
}

add_filter('body_class', 'my_plugin_body_class');