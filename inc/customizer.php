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
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings',
            'priority' => 10,
            'panel' => 'config_default',
        )
    );
    
    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => 'Informações de Copyright',
            'description' => 'Escreva seu Copyright aqui',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );
    // End footer

    // Start Page Home
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => 'Home',
            'priority' => 10,
            'panel' => 'config_default',
        )
    );
    
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => 'Título',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => 'Título',
            'description' => '',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => 'Sub-título',
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => 'Sub-título',
            'description' => '',
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => 'Saiba mais',
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => 'Texto Botão Hero',
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
            'label' => 'Link Botão Hero',
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
            'label' => 'Altura',
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
            'label' => 'Hero Imagem',
            'section' => 'sec_hero',
            'mime_type' => 'image'
        )
    ));
    // End Page Home

    	// 3. Blog
	$wp_customize->add_section( 
        'sec_blog', 
        array(
		    'title' => 'Blog Section',
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
                    'label' => 'Posts per page',
                    'description' => 'How many items to display in the post list?',			
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
                    'label' => 'Post categories to include',
                    'description' => 'Comma separated values or single category ID',
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
                    'label' => 'Post categories to exclude',
                    'description' => 'Comma separated values or single category ID',			
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );
}

add_action('customize_register', 'theme_customizer');