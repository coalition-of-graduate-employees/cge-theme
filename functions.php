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

function cge_theme_is_editing_front_page() {
    $front_page_id = (int) get_option('page_on_front');

    if (!$front_page_id) {
        return false;
    }

    $post_id = 0;
    if (isset($_GET['post'])) {
        $post_id = (int) $_GET['post'];
    } elseif (isset($_POST['post_ID'])) {
        $post_id = (int) $_POST['post_ID'];
    } else {
        $post_id = (int) get_the_ID();
    }

    return $post_id === $front_page_id;
}

function cge_theme_hide_front_page_title_in_editor() {
    if (cge_theme_is_editing_front_page()) {
        $css = '.editor-styles-wrapper .edit-post-visual-editor__post-title-wrapper,'
            . '.editor-styles-wrapper .editor-post-title,'
            . '.editor-styles-wrapper .editor-post-title__block,'
            . '.editor-styles-wrapper .wp-block-post-title{display:none;}';
        wp_add_inline_style('wp-edit-blocks', $css);
    }
}
add_action('enqueue_block_editor_assets', 'cge_theme_hide_front_page_title_in_editor');

function cge_theme_hide_front_page_title_block($block_content, $block) {
    if (!is_admin() && is_front_page() && isset($block['blockName']) && $block['blockName'] === 'core/post-title') {
        return '';
    }

    return $block_content;
}
add_filter('render_block', 'cge_theme_hide_front_page_title_block', 10, 2);

function cge_theme_filter_block_templates($block_templates, $query, $template_type) {
    if ($template_type !== 'wp_template') {
        return $block_templates;
    }

    $hidden_slugs = array(
        'archive',
        'home',
        'search',
        'page-no-title'
    );

    return array_values(array_filter($block_templates, function ($template) use ($hidden_slugs) {
        return !in_array($template->slug, $hidden_slugs, true);
    }));
}
add_filter('get_block_templates', 'cge_theme_filter_block_templates', 10, 3);
