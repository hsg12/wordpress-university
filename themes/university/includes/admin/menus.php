<?php

function fu_admin_menus() {
	add_menu_page(
		'FU Theme Options',
		'Theme Options',
		'edit_theme_options',
		'fu_theme_opts',
		'fu_theme_opts_page',
		'dashicons-hammer'
	);
}
