<?php

/**
 * Cookie Notice Popup
 */

// Enqueue the script
if (!function_exists('b324_enqueue_cookie_notice')) :
  function b324_enqueue_cookie_notice()
  {
    if (!is_admin()) {
      wp_enqueue_script('b324_cookie_notice', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js', array(), null, false);
    }
  }
endif;

// Enqueue the script config
if (!function_exists('b324_enqueue_cookie_notice_config')) :
  function b324_enqueue_cookie_notice_config()
  {
    if (!is_admin()) {
      wp_enqueue_script('bd324_cookie_notice_config', get_template_directory_uri() . '/framework/assets/js/source/custom/cookie-notice-config.js', array('b324_cookie_notice'), null, TRUE);
    }
  }
endif;

// Enqueue the styles
if (!function_exists('b324_enqueue_cookie_notice_styles')) :
  function b324_enqueue_cookie_notice_styles()
  {
    if (!is_admin()) {
      wp_enqueue_style('bd324-cookie_notice-styles', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css', array(), null);
    }
  }
endif;
