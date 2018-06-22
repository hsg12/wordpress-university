<?php

function fu_save_options() {

    if ( !current_user_can( 'edit_theme_options' ) ) {
        wp_die( __( 'You are not allowed to be on this page.' ) );
    }

    check_admin_referer( 'fu_options_verify' );

    $opts = get_option( 'fu_opts' );

    $opts['favicon']   = esc_url_raw($_POST['fu_inputFaviconImg']);
    $opts['phone']     = sanitize_text_field($_POST['fu_inputPhone']);
    $opts['facebook']  = sanitize_text_field($_POST['fu_inputFacebook']);
    $opts['twitter']   = sanitize_text_field($_POST['fu_inputTwitter']);
    $opts['youtube']   = sanitize_text_field($_POST['fu_inputYouTube']);
    $opts['linkedin']  = sanitize_text_field($_POST['fu_inputLinkedin']);
    $opts['instagram'] = sanitize_text_field($_POST['fu_inputInstagram']);

    update_option( 'fu_opts', $opts );

    set_transient( 'success', 'Settings successfully updated', 10 );
    wp_redirect( admin_url( 'admin.php?page=fu_theme_opts' ) );
}
