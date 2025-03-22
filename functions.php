<?php
// Theme Support
function universal_builder_setup() {
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/block-styles.css');

    add_theme_support('elementor');

    if (defined('WPB_VC_VERSION')) {
        add_action('init', 'universal_builder_vc_support');
    }

    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'universal-builder'),
    ));
}
add_action('after_setup_theme', 'universal_builder_setup');

// Enqueue Styles
function universal_builder_scripts() {
    wp_enqueue_style('universal-main-style', get_stylesheet_uri());
    wp_enqueue_style('block-styles', get_template_directory_uri() . '/assets/css/block-styles.css');
}
add_action('wp_enqueue_scripts', 'universal_builder_scripts');

// Widget Areas
function universal_builder_widgets_init() {
    register_sidebar(array(
        'name'          => __('Header Widget Area', 'universal-builder'),
        'id'            => 'header-widget',
        'before_widget' => '<div class="header-widget">',
        'after_widget'  => '</div>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'universal-builder'),
        'id'            => 'footer-widget',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
    ));
}
add_action('widgets_init', 'universal_builder_widgets_init');
