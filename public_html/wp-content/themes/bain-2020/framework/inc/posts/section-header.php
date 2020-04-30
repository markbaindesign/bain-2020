<?php

/**
 * Get the markup for a section header
 */

if (!function_exists('bd324_get_section_header')) :
   function bd324_get_section_header($header = NULL, $subheader = NULL)
   {
      if ( $header ){
         $content ='<h1 class="posts__title">' . $header . '</h1>';
      }
      if ( $subheader ){
         $content .= '<div class="subheader">' . $subheader . '</div>';
      }
      return $content;
   }
endif;

/**
 * Related Posts Section Header
 */
if (!function_exists('bd324_get_related_posts_section_header')) :
   function bd324_get_related_posts_section_header( $post_type )
   {
      if ($post_type == 'project') {
         $header = 'Related Projects';
      } else {
         $header = 'Related Posts';
      }
      return $header;
   }
endif;