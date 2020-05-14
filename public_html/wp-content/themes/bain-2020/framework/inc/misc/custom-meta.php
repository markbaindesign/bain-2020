<?php

//	Date/author meta ( "Posted On" )

function baindesign324_posted_on()
{
   $meta = sprintf(
      __('<time class="entry-date" datetime="%3$s" pubdate>%4$s</time>', '_criadoemsampa'),
      esc_url(get_permalink()),
      esc_attr(get_the_time()),
      esc_attr(get_the_date('c')),
      esc_html(get_the_date()),
      esc_url(get_author_posts_url(get_the_author_meta('ID'))),
      esc_attr(sprintf(__('View all posts by %s', '_criadoemsampa'), get_the_author())),
      esc_html(get_the_author())
   );

   return $meta;
}

/**
 * baindesign324_display_post_taxonomies
 */

if (!function_exists('baindesign324_display_post_taxonomies')) :
   function baindesign324_display_post_taxonomies()
   {

      $categories_list = get_the_category_list();
      $tag_list = get_the_tag_list('<li>', '</li><li>', '</li>');

      if ($categories_list || $tag_list) {
         echo '<div id="post-taxonomies">';
         if ($categories_list) {
            echo '<div class="post-taxonomies-categories"><header>Categories</header>' . $categories_list . '</div>';
         }

         if ($tag_list) {
            echo '<div class="post-taxonomies-tags"><header>Tags</header><ul class="post-tags">' . $tag_list . '</ul></div>';
         }
         echo '</div><!-- #post-taxonomies-->';
      }
   }
endif;

/**
 * baindesign324_display_post_taxonomies
 */

if (!function_exists('baindesign324_post_tags')) :
   function baindesign324_post_tags()
   {
      if (!is_single()) {
         return;
      }

      $tag_list = get_the_tag_list('<li>', '</li><li>', '</li>');
      if ($tag_list) {
         $content = '<ul class="post-tags">' . $tag_list . '</ul></div>';
      }
      return $content;
   }
endif;

/**
 * Return a list of custom taxonomy terms for a post
 */

if (!function_exists( 'bd324_custom_tax_terms' )) :
   function bd324_custom_tax_terms( $tax )
   {
      if (!is_single()) {
         return;
      }

      $terms = get_the_term_list( 
         get_the_ID(), 
         $tax, 
         '<ul class="post-tags post-tags__custom"><li>',
         '</li><li>',
         '</li></ul>'
      );
      
      return $terms;
   }
endif;

/**
 * Post Tags Section
 */
if (!function_exists('baindesign324_post_tags_section')) :
   function baindesign324_post_tags_section()
   {
      if (!is_single()) {
         return;
      }

      // Check for tags
      $tags = baindesign324_post_tags();
      $portfolio_terms = bd324_custom_tax_terms( 'skill' );
      $cats = get_the_category_list();
      // var_dump( $portfolio_terms );

      if (!$tags && !$cats && !$portfolio_terms ){
         return;
      }

      $classes = array(
         'section--tags'
      );
      baindesign324_generic_wrapper(NULL, $classes, NULL);
      echo '<div class="post-taxonomies">';
      if ( $cats ) {
         echo $cats;
      }
      if ( $tags ) {
         echo $tags;
      }
      if ( $portfolio_terms ) {
         echo $portfolio_terms;
      }
      echo '</div>';
      baindesign324_generic_wrapper(NULL, NULL, 'close');
   }
endif;
