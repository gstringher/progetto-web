<?php

function child_enqueue_styles() {

wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() .

'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );