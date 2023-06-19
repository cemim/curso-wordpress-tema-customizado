<?php

function theme_load_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all');
}

add_action('wp_enqueue_scripts', 'theme_load_scripts');