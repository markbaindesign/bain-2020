<?php

/**
 * AOS data attributes
 * -------------------
 */

if (!function_exists('bd324_aos_data_atts')) :
   function bd324_aos_data_atts( $template, $element)
   { 
      $attrs = '';

      // Some defaults
      /*
      if ($element == 'article'){
         $attrs = 'data-aos="fade-up" data-aos-duration="2000"';
      }
      */
      $attrs = 'data-aos="fade-up" data-aos-duration="2000"';

      return $attrs;
    }
endif;