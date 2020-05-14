<?php

/**
 * Theme version
 * -------------
 * 
 * This function is used for cache busting. It's basically a 
 * constant that's updated with the latest version number
 * via a Grunt task (just like the README, for example). 
 * 
 * We use the output of this function in the call to the 
 * main theme stylesheet.
 */

if (!function_exists('baindesign324_theme_version')) :
   function baindesign324_theme_version()
   { 
      // Value updated via Grunt task when 
      // theme version changes. 
      // Used to get version in stylesheet enqueue function
      // for cache-busting.
      $version="0.1.0";
      return $version;
    }
endif;