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
remove_action('baindesign324_content_after', 'baindesign324_post_tags_section', 10);
remove_action('baindesign324_primary_before', 'baindesign324_content_secondary', 40);
remove_action('baindesign324_pre_content', 'baindesign324_cover', 20);
remove_action('baindesign324_primary_after',      'baindesign324_comments',                    50);
remove_action('baindesign324_header_top', 'baindesign324_mmenu_mhead', 5);
remove_action('baindesign324_header_top', 'baindesign324_sticky_header', 5);
remove_action( 'wp_enqueue_scripts', 'bd324_enqueue_script_toggle', 10 );
remove_action( 'wp_enqueue_scripts',      'baindesign324_enqueue_js_responsive_nav',      10 );
remove_action('baindesign324_pre_colophon', 'baindesign324_related_blog_posts',              30);
add_action('baindesign324_pre_colophon', 'baindesign324_related_blog_posts',              15);


remove_action('baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_close', 100);
remove_action('baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_open', 10);
remove_action('baindesign324_header_top', 'baindesign324_toggle_search', 60);
remove_action('baindesign324_header_top', 'baindesign324_search_bar', 70);
remove_action('baindesign324_header_top', 'baindesign324_menu_standard', 30);
remove_action( 'wp_enqueue_scripts',   'bd324_enqueue_fp_styles',                      999 );
remove_action('baindesign324_header_top', 'baindesign324_mmenu_toggle', 40);
remove_action('baindesign324_header_top', 'baindesign324_mmenu_toggle_static', 40);
remove_action('baindesign324_pre_header', 'baindesign324_menu_account', 50);
remove_action('baindesign324_pre_header', 'baindesign324_pre_header_wrapper_close', 100);
remove_action('baindesign324_pre_header', 'baindesign324_pre_header_wrapper_open', 10);
remove_action('baindesign324_pre_header', 'baindesign324_social_links', 60);
remove_action('baindesign324_colophon', 'baindesign324_site_info_design_credit', 30);
remove_action('baindesign324_colophon', 'baindesign324_back_to_top', 60);