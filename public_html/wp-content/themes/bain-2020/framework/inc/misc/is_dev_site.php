<?php

/**
 * Is this site a dev site?
 * ------------------------
 */

if (!function_exists('bd324_get_dev_sites')) :
   function bd324_get_dev_sites()
   { 
      // Return array of hardcoded dev sites
      // for cache-busting.
      // Any and all dev sites can be added here. 
      $sites = array(
         'https://example.test', // Placeholders
         'https://dev.example.test',
      );
      return $sites;
    }
endif;

if (!function_exists('bd324_is_dev_site')) :
   function bd324_is_dev_site()
   { 
      // Return true if site is dev site
      $url = get_site_url();
      $sites = bd324_get_dev_sites();

      // Loop through array until match found => return TRUE
      // Else return FALSE.
      if ( in_array( $url, $sites ) ){
         $bool =  TRUE;
      } else {
         $bool =  FALSE;
      }
      // Debug
      // var_dump($bool);

      return $bool;
    }
endif;