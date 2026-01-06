<?php

function my_setup () {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'search-form',
        'script',
        'style',
    ));

}
add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all');
    wp_enqueue_style('my', get_stylesheet_uri() . "/css/style.css", array(), filemtime(get_template_directory() . "/css/style.css"), 'all');
    wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array('jquery'), filemtime(get_template_directory() . '/js/script.js'), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
