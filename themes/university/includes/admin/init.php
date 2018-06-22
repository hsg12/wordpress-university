<?php

function fu_admin_init() {
	include( 'enqueue.php' );

	add_action( 'admin_enqueue_scripts', 'ju_admin_enqueue' );
	add_action( 'admin_post_fu_save_options', 'fu_save_options' );
}
