<?php
show_admin_bar(false);
add_action( 'wp_enqueue_scripts', 'odri_kids_styles' );
add_action( 'wp_enqueue_scripts', 'jquery' );
add_action( 'wp_enqueue_scripts', 'odri_kids_scripts' );



function odri_kids_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	// wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');
	// wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css');
}
function jquery(){
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');
	// регистрируем
	wp_register_script('jquery-core', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', false, null, true);
	wp_register_script('jquery', false, array('jquery-core'), null, true);
	// подключаем
	wp_enqueue_script( 'jquery' );
}
function odri_kids_scripts() {
	// wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'map-google', get_template_directory_uri() . '/assets/js/map.js', array('jquery'), null, true);
	// wp_enqueue_script( 'model-slider', get_template_directory_uri() . '/assets/js/slider.js', array('jquery'), null, true);
	// wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}

add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails' );
add_image_size( 'Slider', 700, 1200, false);
 ?>
