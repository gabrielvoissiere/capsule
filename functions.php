<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function register_my_menu() {
    $locations = array(
        'header-one' => 'Header Menu One',
        'header-two' => 'Header Menu Two',
    );
    register_nav_menus( $locations );
}

add_action( 'init', 'register_my_menu' );