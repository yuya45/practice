<?php

function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-header');
    add_theme_support('menu');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
}
add_action('after_setup_theme', 'my_setup');

// CSSとJavaScriptの読み込み ----------------------------------------------------------
function my_script_init()
{
    wp_enqueue_style(
        'my-s',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        '1.0.0',
        'all'
    );
    wp_enqueue_style(
        'splide',
        get_template_directory_uri() . '/assets/css/splide.min.css',
        [],
        '1.0.0',
        'all'
    );
    wp_enqueue_script(
        'jquery',
        get_template_directory_uri() . '/assets/libs/jquery-3.7.1.min.js',
        [],
        '3.7.1',
        true
    );
    wp_enqueue_script(
        'gsap',
        get_template_directory_uri() . '/assets/libs/gsap.min.js',
        [],
        '3.7.1',
        true
    );
    wp_enqueue_script(
        'ScrollTrigger',
        get_template_directory_uri() . '/assets/libs/ScrollTrigger.min.js',
        [],
        '3.7.1',
        true
    );
    wp_enqueue_script(
        'splide',
        get_template_directory_uri() . '/assets/libs/splide.min.js',
        [],
        '3.7.1',
        true
    );
    wp_enqueue_script(
        'splide-ex',
        get_template_directory_uri() . '/assets/libs/splide-extension-auto-scroll.min.min.js',
        ['splide'],
        '3.7.1',
        true
    );
    wp_enqueue_script(
        'my-j',
        get_template_directory_uri() . '/assets/js/script.js',
        ['jquery'],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'my_script_init');

// タイトルタグ
function setup_my_theme()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'setup_my_theme');

//トップページはタイトルのみ

function rewrite_title($title)
{
    if (is_home()) {
        $title['tagline'] = '';
    }
    return $title;
}
add_filter('document_title_parts', 'rewrite_title');
