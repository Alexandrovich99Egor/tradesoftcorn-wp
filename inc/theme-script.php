<?php
/**
 * Styles and JS scripts theme.
 */

function theme_scripts()
{
    // Подключение стилей
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('theme-styles-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('owl-carousel-styles', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');


    wp_enqueue_script('jquery');

    wp_enqueue_script('owl-carousel-filter', 'https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', ['jquery'], '2.3.4', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('custom-theme-js', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');
