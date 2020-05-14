<?php

/**
 * Get a set of related posts based on tags
 */

if (!function_exists('bd324_get_related_posts_section')) :

   function bd324_get_related_posts_section($post_type, $number_of_posts = '3', $post_id = NULL, $header = NULL, $subheader = NULL)
   {
      global $post;
      $orig_post = $post;
      $my_query = bd324_get_related_posts($post_type, $number_of_posts, $post_id);

      // Debug
      // var_dump($my_query);

      // Classes
      $classes = array(
         'posts',
         'posts--related',
         'posts--' . $number_of_posts,
         'posts--' . $post_type
      );

      if ($my_query->have_posts()) :

         baindesign324_generic_wrapper(NULL, $classes, NULL);

         // Section Header
         echo bd324_get_section_header($header, $subheader);

         // Section content
         echo '<div class="posts__wrapper">';

         // The loop
         while ($my_query->have_posts()) :
            $my_query->the_post();
            get_template_part('content-archive');
         endwhile;

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
   function bd324_get_related_posts($post_type, $number_of_posts, $post_id)
   {

      if ($post_type == 'project') {
         $tax = 'skill';
      } else {
         $tax = 'post_tag';
      }

      $custom_taxterms = wp_get_object_terms(
         $post_id,
         $tax,
         array(
            'fields' => 'ids'
         )
      );

      $args = array(
         'post_type' => $post_type,
         'post__not_in' => array(
            $post_id
         ),
         'posts_per_page'           => $number_of_posts,
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
 * Default Related Post Section
 */
if (!function_exists('bd324_show_related_posts_section')) :
   function bd324_show_related_posts_section()
   {
      if ( ! is_single()){
         return;
      }
      // Vars
      $post_id = get_the_ID();
      $post_type = get_post_type($post_id);
      $number_of_posts = '3';
      $header = bd324_get_related_posts_section_header( $post_type );
      // $subheader = '';

      $content = bd324_get_related_posts_section( $post_type, $number_of_posts, $post_id, $header);

      echo $content;
   }
endif;
