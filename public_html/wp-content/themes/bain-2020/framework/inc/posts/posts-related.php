<?php

/**
 * Show a set of related posts based on tags
 */

if (!function_exists('baindesign324_related_blog_posts')) :
   function baindesign324_related_blog_posts()
   {
      global $post;
      $orig_post = $post;
      $my_query = bd324_get_related_posts();
      $header = bd324_related_posts_section_header();

      if ($my_query->have_posts()) :
         $classes = array(
            'posts',
            'posts--related',
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo '<header><h3>';
         _e($header, '_baindesign');
         echo '</h3></header>';
         echo '<div class="posts__wrapper">';
         while ($my_query->have_posts()) {
            $my_query->the_post();
            get_template_part('content', 'archive');
         }
         echo '</div>';
         baindesign324_generic_wrapper(NULL, NULL, 'close');
      endif;
      // Reset query
      $post = $orig_post;
      wp_reset_query();
   }
endif;

/**
 * Get related posts
 */
if (!function_exists('bd324_get_related_posts')) :
   function bd324_get_related_posts()
   {
      $id = get_the_ID();
      $post_type = get_post_type($id);

      if ($post_type == 'project') {
         $tax = 'skill';
      } else {
         $tax = 'post_tag';
      }

      $custom_taxterms = wp_get_object_terms(
         $id,
         $tax,
         array(
            'fields' => 'ids'
         )
      );

      $args = array(
         'post_type' => $post_type,
         'post__not_in' => array(
            $post->ID
         ),
         'posts_per_page'           => 3,
         'ignore_sticky_posts'      => 1,
         'tax_query' => array(
            array(
               'taxonomy' => $tax,
               'field' => 'id',
               'terms' => $custom_taxterms
            )
         ),
      );

      $related_query = new wp_query($args);
      return $related_query;
   }
endif;

/**
 * Show the related posts
 * 
 * Outputs a section with related posts
 */
if (!function_exists('bd324_show_related_posts')) :
   function bd324_show_related_posts()
   {
      // Check for related posts
      $related = '';

      // Show related posts if found
      if ($related) {
      }
   }
endif;

/**
 * Related Posts Section Header
 */
if (!function_exists('bd324_related_posts_section_header')) :
   function bd324_related_posts_section_header()
   {
      $id = get_the_ID();
      $post_type = get_post_type($id);

      if ($post_type == 'project') {
         $header = 'Related Projects';
      } else {
         $header = 'Related Posts';
      }
      return $header;
   }
endif;
