<?php

/**
 * Overrule existing theme functions here. 
 * 
 * Example: 
 * 
 *  add_action( 'baindesign324_pre_header', 'my_custom_preheader', 50 );
 * 
 * function my_custom_preheader() {
 *	    echo 'My custom preheader!';
 * }
 * 
 */

/**
 * Related Posts Section Header
 */

   function bd324_related_posts_section_header()
   {

      $header = 'Similar, but also different';
      return $header;
   }