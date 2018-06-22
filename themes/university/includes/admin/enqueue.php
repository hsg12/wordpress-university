<?php

function ju_admin_enqueue() {
    if ( !isset($_GET['page']) || $_GET['page'] != 'fu_theme_opts' ) {
        return;
    }

    wp_register_style( 'fu_boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
    wp_register_style( 'fu_admin-style', get_template_directory_uri() . '/css/admin-style.css' );
    wp_enqueue_style( 'fu_boostrap' );
    wp_enqueue_style( 'fu_admin-style' );

    wp_enqueue_media();

    wp_register_script( 'fu_options', get_template_directory_uri() . '/js/app-script.js', array('jquery'), false, true );
    wp_register_script( 'fu-admin-bootstrap-min-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_script( 'fu_options' );
    wp_enqueue_script( 'fu-admin-bootstrap-min-js' );
}
