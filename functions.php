<?php

function premier_enqueue_assets() {

    // Google Fonts
    wp_enqueue_style(
        'premier-google-fonts',
        'https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap',
        array(),
        null
    );

    // Slick CSS
    wp_enqueue_style(
        'slick-css',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array(),
        '1.8.1'
    );

    // Main Theme CSS
    wp_enqueue_style(
        'premier-style',
        get_template_directory_uri() . '/assets/css/index.css',
        array('slick-css'),
        '1.0'
    );

    // jQuery (WordPress built-in)
    wp_enqueue_script('jquery');

    // Slick JS
    wp_enqueue_script(
        'slick-js',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('jquery'),
        '1.8.1',
        true
    );

    // Global JS
    wp_enqueue_script(
        'global-js',
        get_template_directory_uri() . '/assets/js/global.js',
        array('jquery'),
        '1.0',
        true
    );

    // Main JS
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js?v=42',
        array('jquery', 'slick-js'),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'premier_enqueue_assets');

add_theme_support('custom-logo');

// resgisterin menu bar
function premier_theme_setup() {

    register_nav_menus([
        'primary-menu' => 'Primary Menu'
    ]);

}

add_action('after_setup_theme', 'premier_theme_setup');