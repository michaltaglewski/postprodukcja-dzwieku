<?php
if (!defined('ABSPATH')) { exit; }

function ppd_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array(
        'primary' => __('Menu główne', 'ppd'),
        'footer'  => __('Stopka', 'ppd'),
    ));
}
add_action('after_setup_theme', 'ppd_setup');

function ppd_menu_classes($classes, $item, $args) {
    if ($args->theme_location === 'primary') {
        if (in_array('button', $classes)) {
            $classes[] = 'button-border';
        }
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'ppd_menu_classes', 10, 3);

function ppd_nav_menu_container_attributes($atts, $args) {
    if ($args->theme_location === 'primary' && isset($args->add_aria_label)) {
        $atts['aria-label'] = __('Menu główne', 'ppd');
    }
    return $atts;
}
add_filter('nav_menu_container_attributes', 'ppd_nav_menu_container_attributes', 10, 2);

function ppd_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->theme_location === 'primary') {
        if (in_array('button', $item->classes)) {
            $atts['class'] = !empty($atts['class']) ? $atts['class'] . ' button button-border' : 'button button-border';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'ppd_nav_menu_link_attributes', 10, 3);

function ppd_nav_menu_remove_li($items, $args) {
    if ($args->theme_location === 'primary') {
        $items = preg_replace('/<li[^>]*>/', '', $items);
        $items = str_replace('</li>', '', $items);
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ppd_nav_menu_remove_li', 10, 2);

function ppd_assets() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'owl-carousel',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
        array(),
        '2.3.4'
    );
    wp_enqueue_style('ppd-style', get_stylesheet_uri(), array('owl-carousel'), $version);

    wp_enqueue_script(
        'owl-carousel',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
        array('jquery'),
        '2.3.4',
        true
    );
    wp_enqueue_script(
        'ppd-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery', 'owl-carousel'),
        $version,
        true
    );

    wp_localize_script(
        'ppd-script',
        'ppdTheme',
        array(
            'previousArrowUrl' => get_template_directory_uri() . '/assets/images/Arrow.svg',
            'nextArrowUrl' => get_template_directory_uri() . '/assets/images/ArrowLeft.svg',
        )
    );
}
add_action('wp_enqueue_scripts', 'ppd_assets');

function getCarousel(string $id): ?array
{
    if (empty($id)) {
        return null;
    }

    if (!function_exists('get_field')) {
        return null;
    }

    $carousel['title'] = get_field($id . '_title') ?: '';
    $carousel['side'] = get_field($id . '_side') ?: 'left';
    $carousel['box'] = get_field($id . '_box') ?: false;

    for ($i = 1; $i <= 5; $i++) {
        $item = get_field($id. '_#' . $i);
        if ($item) {
            $carousel['items'][] = $item;
        }
    }

    return $carousel;
}
