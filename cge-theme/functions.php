<?php

if (!defined('ABSPATH')) {
    exit;
}

function cge_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'cge_theme_setup');

function cge_theme_enqueue_assets() {
    wp_enqueue_style(
        'cge-theme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'cge_theme_enqueue_assets');
