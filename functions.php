<?php

require get_template_directory() . '/inc/customizer.php';

function theme_load_scripts(){
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), wp_get_theme()->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'theme_load_scripts');

function theme_config(){
    $textdomain = 'curso-wordpress-tema-customizado'; // Definido no style.css

    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'theme_main_menu' => __('Main Menu', $textdomain),
            'theme_footer_menu' => __('Footer Menu', $textdomain)
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
    
    // Professor ensinou a fazer o trecho abaixo usando o theme json que foi implementado na versão 5.8 do Wordpress
    // add_theme_support('align-wide'); // Editor de bloco - imagens ocupem a página toda
    add_theme_support('responsive-embeds'); // Editor de bloco - códigos incorporados como o do Youtube responsivos
    add_theme_support('editor-styles'); // Editor de bloco - Habilita estilizar como os arquivos serão exibidos dentro do editor
    add_editor_style('style-editor.css'); // Informa qual o arquivo que edita as informações dentro do editor de blocos
    add_theme_support('wp-block-styles'); // Editor de bloco - Implementa estilos dos Blocos

    // Professor ensinou a fazer o trecho abaixo usando o theme json que foi implementado na versão 5.8 do Wordpress
    // add_theme_support( 'editor-color-palette', array(
    //     array(
    //         'name'  => esc_attr__( 'Primary', 'curso-wordpress-tema-customizado' ),
    //         'slug'  => 'primary',
    //         'color' => '#001E32',
    //     ),
    //     array(
    //         'name'  => esc_attr__( 'Secondary', 'curso-wordpress-tema-customizado' ),
    //         'slug'  => 'secondary',
    //         'color' => '#CFAF07',
    //     )
    // ) ); // Editor de bloco - Adiciona cor personalizada na paleta de cor dos blocos

    // Desabilita cores personalizadas no tema
    //add_theme_support('disable-custom-colors');
}

add_action('after_setup_theme', 'theme_config', 0);

function theme_register_block_style(){
    wp_register_style('theme-block-style', get_template_directory_uri() . '/block-style.css');

    // Cria um estilo personalizado para um bloco
    // Uma das maneiras de pegar o nome do blog é no console na pagina de admin da página digitar:
    // wp.blocks.getBlockTypes();
    register_block_style(
        'core/quote', // Cria um estilo para a citação
        array(
            'name'          => 'red-quote',
            'label'         => 'Red Quote',
            'is_default'    => false,
            //'inline_style'  => '.wp-block-quote.is-style-red-quote { border-left: 7px solid #ff0000; background: #f9f3f3; padding: 10px 20px;}', // Nesse Caso CSS sempre começa com o nome do bloco .wp-block-quote
            'style_handle'  => 'theme-block-style'
        )
    );
}
add_action('init', 'theme_register_block_style');

function theme_sidebars(){
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'curso-wordpress-tema-customizado'),
        'id'            => 'sidebar-blog',
        'description'   => __('This is the blog sidebar. You can add your widgets here.', 'curso-wordpress-tema-customizado'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Service 1', 'curso-wordpress-tema-customizado'),
        'id'            => 'services-1',
        'description'   => __('First Service Area', 'curso-wordpress-tema-customizado'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Service 2', 'curso-wordpress-tema-customizado'),
        'id'            => 'services-2',
        'description'   => __('Second Service Area', 'curso-wordpress-tema-customizado'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Service 3', 'curso-wordpress-tema-customizado'),
        'id'            => 'services-3',
        'description'   => __('Third Service Area', 'curso-wordpress-tema-customizado'),
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