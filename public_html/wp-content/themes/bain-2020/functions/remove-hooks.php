<?php

/**
 * Remove any hooked functions from the theme.
 * 
 * Multiple versions of some elements are loaded by default, 
 * so you should select the one you want by removing the 
 * others here. 
 * 
 * Example: No mailing list?
 * 
 * remove_action( 'baindesign324_pre_colophon', 'baindesign324_mailchimp_form', 20 );
 * 
 */

remove_action( 'wp_enqueue_scripts',   'bd324_enqueue_fp_styles',                      999 );
remove_action('baindesign324_header_top', 'baindesign324_mmenu_toggle', 40);
remove_action('baindesign324_header_top', 'baindesign324_mmenu_toggle_static', 40);
remove_action('baindesign324_pre_header', 'baindesign324_menu_account', 50);
remove_action( 'wp_head', 'bd324_typekit', 10 );
remove_action('baindesign324_pre_header', 'baindesign324_menu_account', 50);
remove_action('baindesign324_pre_header', 'baindesign324_pre_header_wrapper_close', 100);
remove_action('baindesign324_pre_header', 'baindesign324_pre_header_wrapper_open', 10);
remove_action('baindesign324_pre_header', 'baindesign324_social_links', 60);