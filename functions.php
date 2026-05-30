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

function cge_theme_hide_front_page_title_in_editor() {
    $front_page_id = (int) get_option('page_on_front');
    $current_id = (int) get_the_ID();

    if ($front_page_id && $current_id === $front_page_id) {
        $css = '.editor-styles-wrapper .edit-post-visual-editor__post-title-wrapper{display:none;}';
        wp_add_inline_style('wp-edit-blocks', $css);
    }
}
add_action('enqueue_block_editor_assets', 'cge_theme_hide_front_page_title_in_editor');
