<?php
/**
 * settings page admin on basic acf PRO
 */

if( function_exists('acf_add_options_page') ) {
	acf_add_options_sub_page(array(
		'menu_slug' => 'acf-options-header',
		'page_title' 	=> __('Theme Header Settings','komanda'),
		'menu_title'	=> __('Header','komanda'),
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'menu_slug' 	=> 'acf-options-footer',
		'page_title' 	=> __('Theme Footer Settings','komanda'),
		'menu_title'	=> __('Footer','komanda'),
		'parent_slug'	=> 'theme-general-settings',
	));
}

