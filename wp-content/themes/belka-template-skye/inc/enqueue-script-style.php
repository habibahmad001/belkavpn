<?php

function belka_template_skye_scripts() {
  wp_enqueue_style( 'bootstrp', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'b-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
  wp_enqueue_style( 'belka-template-skye-style', get_stylesheet_uri() );


  wp_enqueue_script( 'belka-template-skye-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'belka-template-skye-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  wp_enqueue_script( 'jq', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true );
  wp_enqueue_script( 'paral', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), null, true );
  wp_enqueue_script( 'scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(), null, true );
  wp_enqueue_script( 'com', get_template_directory_uri() . '/assets/js/common.js', array(), null, true );
  wp_enqueue_script( 'menubtn', get_template_directory_uri() . '/assets/js/menu-btn.js', array(), null, true );
  wp_enqueue_script( 'devices', get_template_directory_uri() . '/assets/js/devices.js', array(), null, true );
  wp_enqueue_script( 'chat', get_template_directory_uri() . '/assets/js/chat.js', array(), null, true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'belka_template_skye_scripts' );
