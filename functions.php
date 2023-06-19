<?php

function theme_load_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), wp_get_theme()->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'theme_load_scripts');