<?php

require get_template_directory() . '/inc/customizer.php';

function theme_load_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), wp_get_theme()->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'theme_load_scripts');

function theme_config(){
    register_nav_menus(
        array(
            'theme_main_menu' => 'Main Menu',
            'theme_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width'         => 200,
        'height'        => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ));

    // Recover title tag in pages
    add_theme_support('title-tag');

    // Permite que ao compartilhar os posts eles sejam compatíveis com leitores de feeds RSS
    add_theme_support('automatic-feed-links');

    // Adiciona elementos em HTML 5,
    // adaptando alguns elementos como sessão de comentários e barra de pesquisa para o HTML 5
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}

add_action('after_setup_theme', 'theme_config', 0);

function theme_sidebars(){
    register_sidebar(array(
        'name'          => 'Blog Sidebar',
        'id'            => 'sidebar-blog',
        'description'   => 'This is the blog sidebar. You can add your widgets here.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name'          => 'Service 1',
        'id'            => 'services-1',
        'description'   => 'First Service Area',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name'          => 'Service 2',
        'id'            => 'services-2',
        'description'   => 'Second Service Area',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name'          => 'Service 3',
        'id'            => 'services-3',
        'description'   => 'Third Service Area',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'theme_sidebars');

// Deixa o tema Compatível com versões anteriores a 5.2
if(! function_exists('wp_body_open')){
    function wp_body_open(){
        do_action('wp_body_open');
    }
}