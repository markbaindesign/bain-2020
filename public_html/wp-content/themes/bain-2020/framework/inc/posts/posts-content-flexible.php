<?php

/**
 * Flex content - Text block
 */
if (!function_exists('bd324_flex_content_text_block')) :
   function bd324_flex_content_text_block()
   {
      // Vars
      $row =      'text_block';
      $field =     get_sub_field('text');

      if (get_row_layout() != $row) {
         return;
      }
      $content = '<div class="text-block">';
      $content .= $field;
      $content .= '</div>';

      return $content;
   }
endif;

/**
 * Flex content - Image Gallery
 */
if (!function_exists('bd324_flex_content_image_gallery')) :
   function bd324_flex_content_image_gallery()
   {
      // Vars
      $row =      'image_gallery_section';
      $images =    get_sub_field('image_gallery_content');
      $count =     count($images);
      
      if($count == 1){
         $count_class = '1up';
      } elseif($count == 2) {
         $count_class = '2up';
      } else {
         $count_class = '3up';
      }

      if (get_row_layout() != $row) {
         return;
      }
      $content = '<div class="gallery gallery--' . $count_class . '">';
      foreach ($images as $image) :
         $content .= baindesign324_image_gallery_images($image);
      endforeach;
      $content .= '</div>';

      return $content;
   }
endif;


/**
 * Flex content - Blockquote
 */
if (!function_exists('bd324_flex_content_blockquote')) :
   function bd324_flex_content_blockquote()
   {
      // Vars
      $row =      'blockquote';
      $quote =     get_sub_field('blockquote-quote');
      $attr =     get_sub_field('blockquote-attribution');

      if (get_row_layout() != $row) {
         return;
      }
      $content = '<div class="blockquote">';
      $content .= '<blockquote class="blockquote__quote"><p>' . $quote . '</p></blockquote>';
      $content .= '<div class="blockquote__attribution"><span>' . $attr . '</span></div>';
      $content .= '</div>';

      return $content;
   }
endif;

/**
 * Flex content - Single Testimonial
 */
if (!function_exists('bd324_flex_content_single_testimonial')) :
   function bd324_flex_content_single_testimonial()
   {
      // Vars
      $row =      'single_testimonial';
      $field =     get_sub_field('testimonial');
      $id =        $field->ID;

      if (get_row_layout() != $row) {
         return;
      }
      $content = '<div class="testimonial">';
      $content .= bd324_get_testimonial_content($id);
      $content .= '</div>';

      return $content;
   }
endif;

/**
 * Flex content - Testimonial Group
 */
if (!function_exists('bd324_flex_content_group_testimonial')) :
   function bd324_flex_content_group_testimonial()
   {
      // Vars
      $row =           'testimonial';
      $testimonials =   get_sub_field('testimonial');
      $count =          count(array($testimonials));
      if (get_row_layout() != $row) {
         return;
      }

      $content = '<div class="testimonials testimonials--count-' . $count . '">';
      foreach ($testimonials as $testimonial) :

         // Vars
         $id =          $testimonial->ID;

         $content .= '<div class="testimonial">';
         $content .= bd324_get_testimonial_content($id);
         $content .= '</div>';
      endforeach;
      $content .= '</div>';



      return $content;
   }
endif;

/**
 * Flex content - Media Block
 */
if (!function_exists('bd324_flex_content_media_block')) :
   function bd324_flex_content_media_block()
   {
      // Vars
      $row =            'media_block';
      $group =          get_sub_field('media_block_content');
      $orientation =    $group["media_block_orientation"];
      $text =           $group["media_block_text"];
      $title =          $group["media_block_title"];
      $image =          get_sub_field("media_block_image");
      $image_url =      $image["url"];
      $content =        '';
      
      // Check
      if (get_row_layout() != $row) {
         return;
      }

      // Debug
      // var_dump($image_url);

      // Output

      // Image
      if( $image_url ){
         $content .= '<div class="post__image">';
         $content .= '<img src="';
         $content .= $image_url;
         $content .= '" />';
         $content .='</div>';
      }

      // Header
      if( $title ){
         $content .= '<h2 class="post__title">';
         $content .= $title;
         $content .='</h2>';
      }

      // Text 
      if( $text ){
         $content .= '<div class="post__body text-block">';
         $content .= $text;
         $content .='</div>';
      }

      return $content;
   }
endif;

/**
 * Flex content - Media Block Orientation Checker
 */
if (!function_exists('bd324_flex_content_check_media_block_orientation')) :
   function bd324_flex_content_check_media_block_orientation()
   {
      $row = 'media_block';
      if (get_row_layout() != $row) {
         return;
      }

      $group = get_sub_field('media_block_content');
      $orientation = $group["media_block_orientation"];
      
      // Return image position
      if($orientation == 'image-left-text-right'){
         $content = 'left';
      } else {
         $content = 'right';
      }
      return $content;
   }
endif;