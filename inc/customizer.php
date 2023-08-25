<?php

function theme_customizer( $wp_customize ){
    $wp_customize->add_panel( 'config_default', 
        array(
            'priority'       => 10,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => 'Config Tema',
            'description'    => 'Personalizar tema com o theme customizer',
        )
    );
    
    // Start footer
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'curso-wordpress-tema-customizado'),
            'description' => __('Copyright Settings', 'curso-wordpress-tema-customizado'),
            'priority' => 10,
            'panel' => 'config_default',
        )
    );
    
    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => __('Copyright X - All Rights Reserved', 'curso-wordpress-tema-customizado'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => __('Informações de Copyright', 'curso-wordpress-tema-customizado'),
            'description' => __('Escreva seu Copyright aqui', 'curso-wordpress-tema-customizado'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );
    // End footer

    // Start Page Home
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Home', 'curso-wordpress-tema-customizado'),
            'priority' => 10,
            'panel' => 'config_default',
        )
    );
    
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Título', 'curso-wordpress-tema-customizado'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => __('Título', 'curso-wordpress-tema-customizado'),
            'description' => __('Please, type your here title here', 'curso-wordpress-tema-customizado'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Sub-título', 'curso-wordpress-tema-customizado'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => __('Sub-título', 'curso-wordpress-tema-customizado'),
            'description' => '',
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => __('Saiba mais', 'curso-wordpress-tema-customizado'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => __('Texto Botão Hero', 'curso-wordpress-tema-customizado'),
            'description' => '',
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label' => __('Link Botão Hero', 'curso-wordpress-tema-customizado'),
            'description' => '',
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => __('Altura', 'curso-wordpress-tema-customizado'),
            'description' => '',
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize,
        'set_hero_background',
        array(
            'label' => __('Hero Imagem', 'curso-wordpress-tema-customizado'),
            'section' => 'sec_hero',
            'mime_type' => 'image'
        )
    ));
    // End Page Home

    	// 3. Blog
	$wp_customize->add_section( 
        'sec_blog', 
        array(
		    'title' => __('Blog Section', 'curso-wordpress-tema-customizado'),
            'priority' => 10,
            'panel' => 'config_default',
	) );
    
            // Posts per page
            $wp_customize->add_setting( 
                'set_per_page', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
            ) );

            $wp_customize->add_control( 
                'set_per_page', 
                array(
                    'label' => __('Posts per page', 'curso-wordpress-tema-customizado'),
                    'description' => __('How many items to display in the post list?', 'curso-wordpress-tema-customizado'),
                    'section' => 'sec_blog',
                    'type' => 'number'
            ) );

            // Post categories to include
            $wp_customize->add_setting( 
                'set_category_include', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_category_include', 
                array(
                    'label' => __('Post categories to include', 'curso-wordpress-tema-customizado'),
                    'description' => __('Comma separated values or single category ID', 'curso-wordpress-tema-customizado'),
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );	

            // Post categories to exclude
            $wp_customize->add_setting( 
                'set_category_exclude', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_category_exclude', 
                array(
                    'label' => __('Post categories to exclude', 'curso-wordpress-tema-customizado'),
                    'description' => __('Comma separated values or single category ID', 'curso-wordpress-tema-customizado'),
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );
}

add_action('customize_register', 'theme_customizer');