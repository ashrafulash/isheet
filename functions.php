<?php

/*
    ==============================
    Add style and Script Files
    ==============================
*/


function custom_enqueue_scripts(){

    //add stylesheet
    wp_enqueue_style( 'bootstrap', get_template_directory_uri( ) . '/assets/css/bootstrap.min.css', array() , '4.5.2', 'all' );
    wp_enqueue_style( 'customstyle', get_template_directory_uri( ) . '/assets/css/master.css', array() , '1.0.0', 'all' );

    //add scripts
    wp_enqueue_script( 'jquery-slim', get_template_directory_uri( ) . '/assets/js/jquery-3.5.1.slim.min.js', array() , '3.5.1', true );
    wp_enqueue_script( 'popperscript', get_template_directory_uri( ) . '/assets/js/popper.min.js', array() , '1.0.0', true );
    wp_enqueue_script( 'bootstrapscript', get_template_directory_uri( ) . '/assets/js/bootstrap.min.js', array() , '4.5.2', true );
    wp_enqueue_script( 'customscript', get_template_directory_uri( ) . '/assets/js/custom.js', array() , '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );


/*
    ==============================
    Include theme support
    ==============================
*/

function invitationsheet_theme_support(){
    add_theme_support( 'menus' );
    register_nav_menu( 'primary-menu', 'Primary Navigation Menu' );
}

add_action( 'init', 'invitationsheet_theme_support' );

/*
    ==============================
    Include Walker File
    ==============================
*/

include get_template_directory() . '/includes/walker.php';
