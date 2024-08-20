<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');
}

function mytheme_enqueue_scripts() {
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

function mytheme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'mytheme'),
        'id' => 'primary-sidebar',
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_elementor_support() {
    // Enable support for Elementor
    add_theme_support('elementor');

    // Ensure Elementor scripts and styles are properly loaded
    wp_enqueue_style('elementor-frontend', plugins_url() . '/elementor/assets/css/frontend.min.css');
    wp_enqueue_script('elementor-frontend-js', plugins_url() . '/elementor/assets/js/frontend.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_elementor_support');

function disable_theme_styles_on_elementor_pages() {
    if (function_exists('elementor_theme_do_location') && elementor_theme_do_location('single')) {
        wp_dequeue_style('your-theme-style-handle');
    }
}
add_action('wp_enqueue_scripts', 'disable_theme_styles_on_elementor_pages');

function mytheme_setup_elementor_global_settings() {
    // Disable default theme colors
    add_theme_support('disable-custom-colors');
    // Disable default theme fonts
    add_theme_support('disable-custom-fonts');
}
add_action('after_setup_theme', 'mytheme_setup_elementor_global_settings');

function mytheme_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_all_core_location();
}
add_action('elementor/theme/register_locations', 'mytheme_register_elementor_locations');

function set_default_elementor_template($template) {
    if (is_singular('page') && !is_page_template()) {
        return 'elementor_canvas';
    }
    return $template;
}
add_filter('template_include', 'set_default_elementor_template');
?>