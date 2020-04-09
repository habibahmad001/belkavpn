<?php

if ( ! function_exists( 'belka_template_skye_setup' ) ) :

  function belka_template_skye_setup() {

    load_theme_textdomain( 'belka-template-skye', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'top_first' => 'Основное верхнее меню',
        'top_second' => 'Второе верхнее меню',
        'footer_products' => 'Меню Products',
        'footer_apps' => 'Меню Apps',
        'footer_belka' => 'Меню Belka',
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    add_theme_support( 'custom-background', apply_filters( 'belka_template_skye_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

    add_theme_support( 'customize-selective-refresh-widgets' );


    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
  }
endif;
add_action( 'after_setup_theme', 'belka_template_skye_setup' );

function belka_template_skye_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'belka_template_skye_content_width', 640 );
}
add_action( 'after_setup_theme', 'belka_template_skye_content_width', 0 );

