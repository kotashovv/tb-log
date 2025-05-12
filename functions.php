<?php


function theme_enqueue_assets()
{
    $theme_version = '1.0.0'; 

    $theme_dir = get_template_directory_uri();

    // Стили
    wp_enqueue_style('swiper', $theme_dir . '/assets/libs/swiper-bundle.min.css', [], $theme_version);
    wp_enqueue_style('main-style', $theme_dir . '/style.css', ['swiper'], $theme_version);

    // Скрипты
    wp_enqueue_script('swiper', $theme_dir . '/assets/libs/swiper-bundle.min.js', [], $theme_version, true);
    wp_enqueue_script('app', $theme_dir . '/assets/js/app.js', ['swiper'], $theme_version, true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

add_theme_support('menus');