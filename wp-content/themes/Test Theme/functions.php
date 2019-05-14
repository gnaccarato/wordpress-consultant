<?php

function test_theme_files() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Merriweather');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style('test_theme_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'test_theme_files'); 