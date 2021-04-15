<?php

add_action('wp_enqueue_scripts', 'load_enqueue_script', 1);

function load_enqueue_script()
{


    wp_register_script('mdb.min.js', get_template_directory_uri() . '/assets/js/mdb.min.js', '', '', true);
    wp_enqueue_script('mdb.min.js');
}

add_action('wp_enqueue_scripts', 'load_all_stylesheets');

function load_all_stylesheets()
{

    wp_enqueue_style('mdb.min.css', get_template_directory_uri() . '/assets/css/mdb.min.css');
    wp_enqueue_style('all.css', 'https://use.fontawesome.com/releases/v5.15.2/css/all.css');
}
