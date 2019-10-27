<?php

// Capezza Hill functions

if ( ! function_exists( 'mini_pseudo_theme_setup' ) ) :
    function mini_pseudo_theme_setup(){

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Auto generate title tag without hard-coding
        add_theme_support( 'title-tag' );

        // 
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );

        register_nav_menus(
            array(
                'top-right' => __( 'Header Area', 'capezzahill'),
                'footer'    => __( 'Footer Menu', 'capezzahill'),
                'social'    => __( 'Social Links Menu', 'capezzahill'),
            )
        );
        
        add_theme_support( 
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        add_theme_support(
            'custom-logo',
            array(
                'height'        =>  190,
                'width'         =>  190,
                'flex-width'    =>  false,
                'flex-height'   => false,
                'header-text' => array( 'site-title', 'site-description' ),
            )
        );
        
        // Allows for live refresh when updating widgets in customizer I think
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Allow user to decide full with options for editor
        add_theme_support( 'align-wide' );
        
        // Theme support for visual look of blocks on backend only
        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'editor-styles' );
        add_editor_style( 'custom-editor-style.css' );

        // Add excerpts to page
        add_post_type_support( 'page', 'excerpt' );
        
         
        add_theme_support('responsive-embeds');
    }

    add_action( 'after_setup_theme', 'mini_pseudo_theme_setup' );
endif;


require get_template_directory() . '/inc/custom-post-type-pseudo/custom_post_types.php';

require get_template_directory() . '/inc/metabox-pseudo-helper/metabox.php';

require get_template_directory() . '/inc/Gutenberg-Block-Pseudo/block_register.php';
